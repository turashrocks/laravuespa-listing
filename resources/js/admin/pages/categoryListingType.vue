<template>
    <div>
       <div class="content">
			<div class="container-fluid">
				
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
					<p class="_title0">Listing Type Category <Button @click="addModal=true"><Icon type="md-add" /> Add Lisiting Type Category</Button></p>

					<div class="_overflow _table_div">
						<table class="_table">
								<!-- TABLE TITLE -->
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr v-for="(ltcategory, i) in ltcategorys" :key="i" v-if="ltcategorys.length">
								<td>{{ltcategory.id}}</td>
								<td class="_table_name">{{ltcategory.ltcategoryName}}</td>
								<td>
									<Button type="info" size="small" @click="showEditModal(ltcategory, i)">Edit</Button>
									<Button type="error" size="small" @click="showDeletingModal(ltcategory, i)" :loading="ltcategory.isDeleting">Delete</Button>
									
								</td>
							</tr>
								<!-- ITEMS -->
					</table>
					</div>
				</div>


				<!-- ltcategory adding modal -->
				<Modal
					v-model="addModal"
					title="Add ltcategory"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="data.ltcategoryName" placeholder="Add ltcategory name"  />

					<div slot="footer">
						<Button type="default" @click="addModal=false">Close</Button>
						<Button type="primary" @click="addltcategory" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Adding..' : 'Add ltcategory'}}</Button>
					</div>

				</Modal>
				<!-- ltcategory editing modal -->
				<Modal
					v-model="editModal"
					title="Edit ltcategory"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="editData.ltcategoryName" placeholder="Edit ltcategory name"  />

					<div slot="footer">
						<Button type="default" @click="editModal=false">Close</Button>
						<Button type="primary" @click="editltcategory" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Editing..' : 'Edit ltcategory'}}</Button>
					</div>

				</Modal>
				<!-- delete alert modal -->
				<Modal v-model="showDeleteModal" width="360">
					<p slot="header" style="color:#f60;text-align:center">
						<Icon type="ios-information-circle"></Icon>
						<span>Delete confirmation</span>
					</p>
					<div style="text-align:center">
						<p>Are you sure you want to delete ltcategory?.</p>
						
					</div>
					<div slot="footer">
						<Button type="error" size="large" long :loading="isDeleting" :disabled="isDeleting" @click="deleteltcategory" >Delete</Button>
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
				ltcategoryName: ''
			}, 
			addModal : false, 
			editModal : false, 
			isAdding : false, 
			ltcategorys : [], 
			editData : {
				ltcategoryName: ''
			}, 
			index : -1, 
			showDeleteModal: false, 
			isDeleting: false,
			deleteItem: {},
			deletingIndex:-1
			

		}
	},

	methods : {
		async addltcategory(){
			if(this.data.ltcategoryName.trim()=='') return this.e('ltcategory name is required')
			const res = await this.callApi('post', 'app/create_ltcategory', this.data)
			if(res.status===201){
				this.ltcategorys.unshift(res.data)
				this.s('ltcategory has been added successfully!')
				this.addModal = false
				this.data.ltcategoryName = ''
			}else{
				if(res.status==422){
					if(res.data.errors.ltcategoryName){
						this.e(res.data.errors.ltcategoryName[0])
					}
					
				}else{
					this.swr()
				}
				
			}

		},
		async editltcategory(){
			if(this.editData.ltcategoryName.trim()=='') return this.e('ltcategory name is required')
			const res = await this.callApi('post', 'app/edit_ltcategory', this.editData)
			if(res.status===200){
				this.ltcategorys[this.index].ltcategoryName = this.editData.ltcategoryName
				this.s('ltcategory has been edited successfully!')
				this.editModal = false
				
			}else{
				if(res.status==422){
					if(res.data.errors.ltcategoryName){
						this.e(res.data.errors.ltcategoryName[0])
					}	
				}else{
					this.swr()
				}
				
			}

		},
		showEditModal(ltcategory, index){
			let obj = {
				id : ltcategory.id, 
				ltcategoryName : ltcategory.ltcategoryName
			}
			this.editData = obj
			this.editModal = true
			this.index = index
		}, 
		async deleteltcategory(){
			this.isDeleting = true
			const res = await this.callApi('post', 'app/delete_ltcategory', this.deleteItem)
			if(res.status===200){
				this.ltcategorys.splice(this.deletingIndex,1)
				this.s('ltcategory has been deleted successfully')
			}else{
				this.swt()
			}
			this.isDeleting = false
			this.showDeleteModal = false
		}, 
		showDeletingModal(ltcategory, i){
			this.deleteItem = ltcategory
			this.deletingIndex = i
			this.showDeleteModal = true
		}
	}, 

	async created(){
		const res = await this.callApi('get', 'app/get_ltcategory')
		if(res.status==200){
			this.ltcategorys = res.data
		}else{
			this.swr()
		}
	}
	


	
}
</script>