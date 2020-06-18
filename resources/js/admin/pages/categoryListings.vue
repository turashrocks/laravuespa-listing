<template>
    <div>
       <div class="content">
			<div class="container-fluid">
				
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
					<Row>
                        <Col span="12">
							<p class="_title0">Listings Category 
								<Button @click="addModal=true"><Icon type="md-add" /> Add Listing Category</Button>
							</p>
						</Col>
						<Col span="12">
							<span class="_title0-right">
								<Input suffix="ios-search" v-model="search" placeholder="Enter text" style="width: auto" @input="searchWork" />
                            </span>
						</Col>
					</Row>

					<div class="_overflow _table_div">
						<table class="_table" size="small">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Action</th>
							</tr>
							<tr v-for="(lcategory, i) in lcategorys" :key="i" v-if="lcategorys.length">
								<td>{{lcategory.id}}</td>
								<td class="_table_name">{{lcategory.lcategoryName}}</td>
								<td>
									<Button type="info" size="small" @click="showEditModal(lcategory, i)">Edit</Button>
									<Button type="error" size="small" @click="showDeletingModal(lcategory, i)" :loading="lcategory.isDeleting">Delete</Button>
									
								</td>
							</tr>
						</table>
					</div>
				</div>


				<!-- lcategory adding modal -->
				<Modal
					v-model="addModal"
					title="Add lcategory"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="data.lcategoryName" placeholder="Add lcategory name"  />

					<div slot="footer">
						<Button type="default" @click="addModal=false">Close</Button>
						<Button type="primary" @click="addlcategory" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Adding..' : 'Add lcategory'}}</Button>
					</div>

				</Modal>
				<!-- lcategory editing modal -->
				<Modal
					v-model="editModal"
					title="Edit lcategory"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="editData.lcategoryName" placeholder="Edit lcategory name"  />

					<div slot="footer">
						<Button type="default" @click="editModal=false">Close</Button>
						<Button type="primary" @click="editlcategory" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Editing..' : 'Edit lcategory'}}</Button>
					</div>

				</Modal>
				<!-- delete alert modal -->
				<Modal v-model="showDeleteModal" width="360">
					<p slot="header" style="color:#f60;text-align:center">
						<Icon type="ios-information-circle"></Icon>
						<span>Delete confirmation</span>
					</p>
					<div style="text-align:center">
						<p>Are you sure you want to delete lcategory?.</p>
						
					</div>
					<div slot="footer">
						<Button type="error" size="large" long :loading="isDeleting" :disabled="isDeleting" @click="deletelcategory" >Delete</Button>
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
				lcategoryName: ''
			}, 
			addModal : false, 
			editModal : false, 
			isAdding : false, 
			lcategorys : [], 
			editData : {
				lcategoryName: ''
			}, 
			index : -1, 
			showDeleteModal: false, 
			isDeleting: false,
			deleteItem: {},
			deletingIndex:-1,
			loading: false,
			search: ''
			

		}
	},
	mounted() {
            this.searchWork()
    },
	methods : {
		async addlcategory(){
			if(this.data.lcategoryName.trim()=='') return this.e('lcategory name is required')
			const res = await this.callApi('post', 'app/create_lcategory', this.data)
			if(res.status===201){
				this.lcategorys.unshift(res.data)
				this.s('lcategory has been added successfully!')
				this.addModal = false
				this.data.lcategoryName = ''
			}else{
				if(res.status==422){
					if(res.data.errors.lcategoryName){
						this.e(res.data.errors.lcategoryName[0])
					}
					
				}else{
					this.swr()
				}
				
			}

		},
		async editlcategory(){
			if(this.editData.lcategoryName.trim()=='') return this.e('lcategory name is required')
			const res = await this.callApi('post', 'app/edit_lcategory', this.editData)
			if(res.status===200){
				this.lcategorys[this.index].lcategoryName = this.editData.lcategoryName
				this.s('lcategory has been edited successfully!')
				this.editModal = false
				
			}else{
				if(res.status==422){
					if(res.data.errors.lcategoryName){
						this.e(res.data.errors.lcategoryName[0])
					}	
				}else{
					this.swr()
				}
				
			}

		},
		showEditModal(lcategory, index){
			let obj = {
				id : lcategory.id, 
				lcategoryName : lcategory.lcategoryName
			}
			this.editData = obj
			this.editModal = true
			this.index = index
		}, 
		async deletelcategory(){
			this.isDeleting = true
			const res = await this.callApi('post', 'app/delete_lcategory', this.deleteItem)
			if(res.status===200){
				this.lcategorys.splice(this.deletingIndex,1)
				this.s('lcategory has been deleted successfully')
			}else{
				this.swt()
			}
			this.isDeleting = false
			this.showDeleteModal = false
		}, 
		showDeletingModal(lcategory, i){
			this.deleteItem = lcategory
			this.deletingIndex = i
			this.showDeleteModal = true
		},
		searchWork(){
			//alert('search box typed')
			 this.loading = true;
                axios.get('api/get_lcategory', {
                    params: {
                        ...this.data
                    }
                })
                .then((res) => {
                    this.houses = res.data;
                })
                .catch((err) => {
                    console.error(err)
                })
                .then(() => {
                    this.loading = false;
                })
		}
	}, 

	async created(){
		const res = await this.callApi('get', 'app/get_lcategory')
		if(res.status==200){
			this.lcategorys = res.data
		}else{
			this.swr()
		}
	}
	


	
}
</script>