<template>
    <div>
      <!-- <div v-if="$store.state.user"> -->
      <div>
      <!--========== ADMIN SIDE MENU one ========-->
      <div class="_1side_menu" >
        <div class="_1side_menu_logo">
          <h3 style="text-align:center; color: #fff;">Logo Trueen</h3>
          <!--<img src="/img/logo.jpg" style="width: 108px;margin-left: 68px;"/>-->
        </div>

        <!--~~~~~~~~ MENU CONTENT ~~~~~~~~-->
        <div class="_1side_menu_content">
          <div class="_1side_menu_img_name">
            <!-- <img class="_1side_menu_img" src="/pic.png" alt="" title=""> -->
            <p class="_1side_menu_name">Dashboard</p>
          </div>
          
          <!--~~~ MENU LIST ~~~~~~-->
          <div class="_1side_menu_list">
            <ul class="_1side_menu_list_ul">
              <!-- <li v-for="(menuItem, i) in permission" :key="i" v-if="permission.length && menuItem.read">
                <router-link :to="menuItem.name"><Icon type="ios-speedometer" /> {{menuItem.resourceName}}</router-link>
              </li> -->

                <li><router-link to="/"><Icon type="ios-speedometer" />Listings</router-link></li>
                <li><router-link to="country"><Icon type="ios-speedometer" />Country</router-link></li>
                <li><router-link to="category-listing-type"><Icon type="ios-speedometer" />Category Type</router-link></li>
                <li><router-link to="category-listings"><Icon type="ios-speedometer" />Categories All</router-link></li>
                <!-- <li><router-link to="listingcategory"><Icon type="ios-speedometer" />Listings Category</router-link></li> -->
                <li><router-link to="user"><Icon type="ios-speedometer" />User</router-link></li>
                <li><router-link to="underdev"><Icon type="ios-speedometer" />Packages</router-link></li>
                <li><router-link to="message"><Icon type="ios-speedometer" />Messages</router-link></li>
                <li><router-link to="blog"><Icon type="ios-speedometer" />Blog</router-link></li>
                <li><router-link to="categoryblog"><Icon type="ios-speedometer" />Blog Category</router-link></li>
                <li><router-link to="tags"><Icon type="ios-speedometer" />Tag</router-link></li>
                <li><router-link to="underdev"><Icon type="ios-speedometer" />Payment Received</router-link></li>
              <!-- <li><router-link to="tags"><Icon type="ios-speedometer" /> Tags</router-link></li>
              <li><router-link to="category"><Icon type="ios-speedometer" /> Category</router-link></li>
              <li><router-link to="adminusers"><Icon type="ios-speedometer" /> Admin users</router-link></li>
              <li><router-link to="role"><Icon type="ios-speedometer" /> Role Management</router-link></li>
              <li><router-link to="assignRole"><Icon type="ios-speedometer" /> Assign role</router-link></li> -->


              <!-- <li><a href="/logout"><Icon type="ios-speedometer" /> Logout</a></li> -->
            </ul>
          </div>
        </div>
      </div>
      <!--========== ADMIN SIDE MENU ========-->

      <!--========= HEADER ==========-->
      <div class="header">
        <div class="_2menu _box_shadow">
          <div class="_2menu_logo">
            <ul class="open_button">
              <li>
                <Icon type="ios-list" />
              </li>
              <!--<li><Icon type="ios-albums" /></li>-->
            </ul>
          </div>
          <div class="profile-edit">

              <Dropdown style="margin-right: 40px;padding-top: 5px;">
                <a href="javascript:void(0)">
                    <Badge :count="8">
                        <Icon type="ios-notifications-outline" size="32" color="#000"/>    
                    </Badge>
                    
                </a>
                <DropdownMenu slot="list">
                    <DropdownItem>Henry Nicolas</DropdownItem>
                    <DropdownItem>Patrick</DropdownItem>
                    <DropdownItem>Simon</DropdownItem>
                </DropdownMenu>
            </Dropdown>

            <Dropdown style="margin-right: 40px;padding-top: 5px;">
                <a href="javascript:void(0)">
                    <Badge :count="8">
                        <Icon type="ios-chatboxes-outline" size="32" color="#000"/>                    
                    </Badge>
                    
                </a>
                <DropdownMenu slot="list">
                    <DropdownItem>Henry Nicolas</DropdownItem>
                    <DropdownItem>Patrick</DropdownItem>
                    <DropdownItem>Simon</DropdownItem>
                </DropdownMenu>
            </Dropdown>

            <Dropdown style="margin-right: 40px">
                <a href="javascript:void(0)" class="greet">
                    <Avatar src="https://i.loli.net/2017/08/21/599a521472424.jpg" style="margin-right: 10px"/>
                    Hello Admin
                    <Icon type="ios-arrow-down"></Icon>                    
                </a>
                <DropdownMenu slot="list">
                    <DropdownItem>My Profile</DropdownItem>
                    <DropdownItem>Inbox</DropdownItem>
                    <DropdownItem>Log Out</DropdownItem>
                </DropdownMenu>
            </Dropdown>

            </div>

        </div>
      </div>
      <!--========= HEADER ==========-->
    </div>
    	<router-view/>
    </div>
</template>

<script>
// export default {
//     props: ['user', 'permission'],
//     data(){
//        return {
//           isLoggedIn : false, 
//        }
//     }, 
//     created(){
//        this.$store.commit('setUpdateUser', this.user)
//        this.$store.commit('setUserPermission', this.permission)
//     }
// }
</script>

<script>
    export default {
        
    }
</script>