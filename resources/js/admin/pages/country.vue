<template>
    <div>
       <div class="content">
			<div class="container-fluid">
				
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
					<p class="_title0">Country <Button @click="addModal=true"><Icon type="md-add" /> Add Country</Button></p>

					<div class="_overflow _table_div">
						<table class="_table">
								<!-- TABLE TITLE -->
							<tr>
								<th>ID</th>
								<th>Country</th>
								<th>Flag</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr v-for="(country, i) in countrys" :key="i" v-if="countrys.length">
								<td>{{country.id}}</td>
								<td class="_table_name">{{country.countryName}}</td>
								<td class="table_image">
									<img :src="country.countryFlag"/>
								</td>
								<td>
                                    <Button type="info" size="small" @click="showEditModal(country, i)">Edit</Button>		
                                    <Button type="error" size="small" @click="showDeletingModal(country, i)" :loading="country.isDeleting">Delete</Button>
									
								</td>
							</tr>
								<!-- ITEMS -->
					</table>
					</div>
				</div>


				<!-- country adding modal -->
				<Modal
					v-model="addModal"
					title="Add country"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="data.countryName" placeholder="Add country name"  />
                    <div class="space"></div>
                    <!--  :headers= "{'x-csrf-token': token}" 
                    :on-error="handleError"-->
                    <Upload
                        type="drag"
                        :headers="{'x-csrf-token' : token, 'X-Requested-With' : 'XMLHttpRequest'}"
                        :on-success="handleSuccess"
                        :on-error="handleError"
						:format="['jpg','jpeg','png']"
						:max-size="2048"
						:on-format-error="handleFormatError"
						:on-exceeded-size="handleMaxSize"
                        action="app/upload">
                        <div style="padding: 20px 0">
                            <Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>
                            <p>Click or drag files here to upload</p>
                        </div>
                    </Upload>
                    <div class="demo-upload-list" v-if="data.countryFlag">
						
							<img :src="`${data.countryFlag}`">
							<div class="demo-upload-list-cover">
								<Icon type="ios-trash-outline" @click="deleteImage"></Icon>
							</div>
						
						
					</div>
					<div slot="footer">
						<Button type="default" @click="addModal=false">Close</Button>
						<Button type="primary" @click="addCountry" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Adding..' : 'Add country'}}</Button>
					</div>

				</Modal>
				<!-- country editing modal -->
				<Modal
					v-model="editModal"
					title="Edit category"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="editData.countryName" placeholder="Add country name"  />
                    <div class="space"></div>
                    <Upload v-show="isCountryFlagNew"
                        ref="editDataUploads"
                        type="drag"
                        :headers="{'x-csrf-token' : token, 'X-Requested-With' : 'XMLHttpRequest'}"
						:on-success="handleSuccess"
						:on-error="handleError"
						:format="['jpg','jpeg','png']"
						:max-size="2048"
						:on-format-error="handleFormatError"
						:on-exceeded-size="handleMaxSize"
                        action="/app/upload">
                        <div style="padding: 20px 0">
                            <Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>
                            <p>Click or drag files here to upload</p>
                        </div>
                    </Upload>
					<div class="demo-upload-list" v-if="editData.countryFlag">
						
							<img :src="`${editData.countryFlag}`">
							<div class="demo-upload-list-cover">
								<Icon type="ios-trash-outline" @click="deleteImage(false)"></Icon>
							</div>
						
						
					</div>
					
					<div slot="footer">
						<Button type="default" @click="closeEditModal">Close</Button>
						<Button type="primary" @click="editCountry" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Editing..' : 'Edit Category'}}</Button>
					</div>

				</Modal>
				<!-- delete alert modal -->
				<Modal v-model="showDeleteModal" width="360">
					<p slot="header" style="color:#f60;text-align:center">
						<Icon type="ios-information-circle"></Icon>
						<span>Delete confirmation</span>
					</p>
					<div style="text-align:center">
						<p>Are you sure you want to delete country?.</p>
						
					</div>
					<div slot="footer">
						<Button type="error" size="large" long :loading="isDeleting" :disabled="isDeleting" @click="deletecountry" >Delete</Button>
					</div>
				</Modal>
				

			</div>
		</div>
    </div>
</template>


<script>
export default {
	data(){
		return {
			data : {
                countryName: '',
                countryFlag: ''
			}, 
			addModal : false, 
			editModal : false, 
			isAdding : false, 
            countrys : [], 
            countryLists : [], 
			editData : {
                countryName: '',
                countryFlag: ''
			}, 
			index : -1, 
			showDeleteModal: false, 
			isDeleting: false,
			deleteItem: {},
			deletingIndex:-1,
            token: '',
            isCountryFlagNew: false, 
			isEditingItem: false,
			websiteSettings: []
		}
	},

	methods : {
		async addCountry(){
            if(this.data.countryName.trim()=='') return this.e('country name is required')
            if(this.data.countryFlag.trim()=='') return this.e('Icon image is required')
            this.data.countryFlag = `${this.data.countryFlag}`
			const res = await this.callApi('post', 'app/create_country', this.data)
			if(res.status===201){
				this.countrys.unshift(res.data)
				this.s('country has been added successfully!')
				this.addModal = false
                this.data.countryName = ''
                this.data.countryFlag = ''
			}else{
				if(res.status==422){
					if(res.data.errors.countryName){
						this.e(res.data.errors.countryName[0])
                    }
                    if(res.data.errors.countryFlag){
						this.e(res.data.errors.countryFlag[0])
					}
					
				}else{
					this.swr()
				}
				
			}

		},
		async editCountry(){
			if(this.editData.countryName.trim()=='') return this.e('Country name is required')
			if(this.editData.countryFlag.trim()=='') return this.e('Country flag is required')
			const res = await this.callApi('post', 'app/edit_country', this.editData)
			if(res.status===200){
				this.countrys[this.index].countryName = this.editData.countryName
				this.s('Country has been edited successfully!')
				this.editModal = false
				
			}else{
				if(res.status==422){
					if(res.data.errors.countryName){
						this.e(res.data.errors.countryName[0])
					}
					if(res.data.errors.countryFlag){
						this.e(res.data.errors.countryFlag[0])
					}
					
				}else{
					this.swr()
				}
				
			}

		},
		showEditModal(country, index){
			// let obj = {
			// 	id : country.id, 
			// 	countryName : country.countryName
			// }
			this.editData = country
			this.editModal = true
            this.index = index
            this.isEditingItem = true
		}, 
		async deletecountry(){
			this.isDeleting = true
			const res = await this.callApi('post', 'app/delete_country', this.deleteItem)
			if(res.status===200){
				this.countrys.splice(this.deletingIndex,1)
				this.s('country has been deleted successfully')
			}else{
				this.swt()
			}
			this.isDeleting = false
			this.showDeleteModal = false
		}, 
		showDeletingModal(country, i){
			this.deleteItem = country
			this.deletingIndex = i
			this.showDeleteModal = true
        },
        handleSuccess (res, file) {
			res = `/uploads/${res}`
			if(this.isEditingItem){
				console.log('inside')
				return this.editData.countryFlag = res
			}
			console.log(res)
			this.data.countryFlag = res
		},
        handleError (res, file) {
			this.$Notice.warning({
				title: 'The file format is incorrect',
				desc: `${file.errors.file.length ? file.errors.file[0] : 'Something went wrong!'}`
			});
		},
        handleFormatError (file) {
			this.$Notice.warning({
				title: 'The file format is incorrect',
				desc: 'File format of ' + file.name + ' is incorrect, please select jpg or png.'
			});
		},
		handleMaxSize (file) {
			this.$Notice.warning({
				title: 'Exceeding file size limit',
				desc: 'File  ' + file.name + ' is too large, no more than 2M.'
			});
        },
        async deleteImage(isAdd=true){
			let image
			if(!isAdd){ // for editing.... 
				this.isCountryFlagNew = true
				image = this.editData.countryFlag
				this.editData.countryFlag = ''
				this.$refs.editDataUploads.clearFiles()
			}else{
				image = this.data.countryFlag
				this.data.countryFlag = ''
				this.$refs.uploads.clearFiles()
			}
			
			const res = await this.callApi('post', 'app/delete_image', {imageName: image})
			if(res.status!=200){
				this.data.countryFlag = image
				this.swr()
			}
        },
        closeEditModal(){
			this.isEditingItem = false
			this.editModal = false
		} 
	}, 

	async created(){
        this.token = window.Laravel.csrfToken
		const res = await this.callApi('get', 'app/get_country')
		if(res.status==200){
			this.countrys = res.data
		}else{
			this.swr()
		}
	}
	


	
}
</script>