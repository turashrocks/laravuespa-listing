<template>
    <div>
        <div class="content">
			<div class="container-fluid">
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
                    <Row>
                        <Col span="12"><p class="_title0">All Countries</p></Col>
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
                                <th>Flag</th>
								<th>Name</th>
                                <th>No. of Listings</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Afghanistan</td>
                                <td>100</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Albania</td>
                                <td>50</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

										<!-- ITEMS -->
							<tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Algeria</td>
                                <td>80</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Armenia</td>
                                <td>20</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Austria</td>
                                <td>190</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

                            <tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Argentina</td>
                                <td>80</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Azerbaijan</td>
                                <td>10</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
                                <td><Avatar style="color: #f56a00;background-color: #fde3cf">A</Avatar></td>
								<td class="_table_name">Australia</td>
                                <td>2000</td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->


						</table>
					</div>
				</div>
				 <Page :total="50" />
            </div>
        </div>
    </div>
</template>