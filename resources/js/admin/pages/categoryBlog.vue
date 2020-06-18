<template>
    <div>
       <div class="content">
			<div class="container-fluid">
				
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
					<p class="_title0">Blog Categories <Button @click="addModal=true"><Icon type="md-add" /> Add category</Button></p>

					<div class="_overflow _table_div">
						<table class="_table">
								<!-- TABLE TITLE -->
							<tr>
								<th>ID</th>
								<th>Category name</th>
								<th>Created at</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr v-for="(category, i) in categories" :key="i" v-if="categories.length">
								<td>{{category.id}}</td>
								<td class="_table_name">{{category.categoryName}}</td>
								<td>{{category.created_at}}</td>
								<td>
									<Button type="info" size="small" @click="showEditModal(category, i)">Edit</Button>
									<Button type="error" size="small" @click="showDeletingModal(category, i)" :loading="category.isDeleting">Delete</Button>
									
								</td>
							</tr>
								<!-- ITEMS -->
					</table>
					</div>
				</div>


				<!-- category adding modal -->
				<Modal
					v-model="addModal"
					title="Add category"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="data.categoryName" placeholder="Add category name"  />

					<div slot="footer">
						<Button type="default" @click="addModal=false">Close</Button>
						<Button type="primary" @click="addcategory" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Adding..' : 'Add category'}}</Button>
					</div>

				</Modal>
				<!-- category editing modal -->
				<Modal
					v-model="editModal"
					title="Edit category"
					:mask-closable="false"
					:closable="false"

					>
					<Input v-model="editData.categoryName" placeholder="Edit category name"  />

					<div slot="footer">
						<Button type="default" @click="editModal=false">Close</Button>
						<Button type="primary" @click="editcategory" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Editing..' : 'Edit category'}}</Button>
					</div>

				</Modal>
				<!-- delete alert modal -->
				<Modal v-model="showDeleteModal" width="360">
					<p slot="header" style="color:#f60;text-align:center">
						<Icon type="ios-information-circle"></Icon>
						<span>Delete confirmation</span>
					</p>
					<div style="text-align:center">
						<p>Are you sure you want to delete category?.</p>
						
					</div>
					<div slot="footer">
						<Button type="error" size="large" long :loading="isDeleting" :disabled="isDeleting" @click="deletecategory" >Delete</Button>
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
				categoryName: ''
			}, 
			addModal : false, 
			editModal : false, 
			isAdding : false, 
			categories : [], 
			editData : {
				categoryName: ''
			}, 
			index : -1, 
			showDeleteModal: false, 
			isDeleting: false,
			deleteItem: {},
			deletingIndex:-1
			

		}
	},

	methods : {
		async addcategory(){
			if(this.data.categoryName.trim()=='') return this.e('category name is required')
			const res = await this.callApi('post', 'app/create_category', this.data)
			if(res.status===201){
				this.categories.unshift(res.data)
				this.s('category has been added successfully!')
				this.addModal = false
				this.data.categoryName = ''
			}else{
				if(res.status==422){
					if(res.data.errors.categoryName){
						this.e(res.data.errors.categoryName[0])
					}
					
				}else{
					this.swr()
				}
				
			}

		},
		async editcategory(){
			if(this.editData.categoryName.trim()=='') return this.e('category name is required')
			const res = await this.callApi('post', 'app/edit_category', this.editData)
			if(res.status===200){
				this.categories[this.index].categoryName = this.editData.categoryName
				this.s('category has been edited successfully!')
				this.editModal = false
				
			}else{
				if(res.status==422){
					if(res.data.errors.categoryName){
						this.e(res.data.errors.categoryName[0])
					}	
				}else{
					this.swr()
				}
				
			}

		},
		showEditModal(category, index){
			let obj = {
				id : category.id, 
				categoryName : category.categoryName
			}
			this.editData = obj
			this.editModal = true
			this.index = index
		}, 
		async deletecategory(){
			this.isDeleting = true
			const res = await this.callApi('post', 'app/delete_category', this.deleteItem)
			if(res.status===200){
				this.categories.splice(this.deletingIndex,1)
				this.s('category has been deleted successfully')
			}else{
				this.swt()
			}
			this.isDeleting = false
			this.showDeleteModal = false
		}, 
		showDeletingModal(category, i){
			this.deleteItem = category
			this.deletingIndex = i
			this.showDeleteModal = true
		}
	}, 

	async created(){
		const res = await this.callApi('get', 'app/get_category')
		if(res.status==200){
			this.categories = res.data
		}else{
			this.swr()
		}
	}
	


	
}
</script>