<template>
    <div>
       <div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_one">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">200</p>

								<p class="_1adminOverveiw_card_left_title">Today's Listings</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper" />
							</div>
						</div>
					</div>

					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">90,000</p>

								<p class="_1adminOverveiw_card_left_title">Total Listings</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
					</div>

					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">4000</p>

								<p class="_1adminOverveiw_card_left_title">Total Users</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="md-copy" />
							</div>
						</div>
					</div>

					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">10,000</p>

								<p class="_1adminOverveiw_card_left_title">Premium Listings</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="md-list-box" />
							</div>
						</div>
					</div>
				</div>	
                
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
                    <Row>
                        <Col span="12"><p class="_title0">Recent Listings</p></Col>
                        <Col span="12">
                            <span class="_title0-right">
                            <Input suffix="ios-search" placeholder="Enter text" style="width: auto" />
                            </span>
                        </Col>
                    </Row>
					<!-- <p class="_title0">Recent Listings</p>
                    <span class="_title0-right">
                        <Input suffix="ios-search" placeholder="Enter text" style="width: auto" />
                    </span> -->

					<div class="_overflow _table_div">
						<table size="small" class="_table">
								<!-- TABLE TITLE -->
							<tr>
								<th>Date</th>
                                <th>Logo</th>
								<th>Title</th>
								<th>Category</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr>
								<td>25-05-19</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">L</Avatar></td>
								<td class="_table_name">Lidl</td>
								<td><Tag type="border" color="primary">Shop</Tag><Tag type="border" color="primary">Grocery</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>25-05-19</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">B</Avatar></td>
								<td class="_table_name">BMW</td>
								<td><Tag type="border" color="primary">Automobile</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

										<!-- ITEMS -->
							<tr>
								<td>25-05-19</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">P</Avatar></td>
								<td class="_table_name">Prospecter</td>
								<td><Tag type="border" color="primary">Consulting</Tag><Tag type="border" color="primary">Business</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>25-05-19</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">B</Avatar></td>
								<td class="_table_name">Barkley Steel</td>
								<td><Tag type="border" color="primary">Steel</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>15-11-19</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">H</Avatar></td>
								<td class="_table_name">HSBC</td>
								<td><Tag type="border" color="primary">Banking</Tag><Tag type="border" color="primary">Finance</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

                            <tr>
								<td>13-10-20</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">B</Avatar></td>
								<td class="_table_name">Bayer</td>
								<td><Tag type="border" color="primary">Medical</Tag><Tag type="border" color="primary">Pharmaceuticals</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>23-02-20</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">T</Avatar></td>
								<td class="_table_name">TATA</td>
								<td><Tag type="border" color="primary">Automobile</Tag><Tag type="border" color="primary">Steel</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>12-05-19</td>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">D</Avatar></td>
								<td class="_table_name">Deutsch Bank</td>
								<td><Tag type="border" color="primary">Banking</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn2" type="button">Make Verified</button>
									<button class="_btn _action_btn make_btn3" type="button">Make Premium</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->


						</table>
					</div>
				</div>
				 <Page :total="100" />

			</div>
		</div>
    </div>
</template>