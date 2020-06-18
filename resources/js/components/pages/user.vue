<template>
    <div>
        <div class="content">
			<div class="container-fluid">
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
                    <Row>
                        <Col span="12"><p class="_title0">Users</p></Col>
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
								<th>ID</th>
                                <th>Image</th>
								<th>Name</th>
								<th>Member</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr>
								<td>1</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Ahmed Salah</td>
								<td><Tag color="warning">Gold</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag type="border" color="primary">Make Normal</Tag>
									<Tag color="#808080">Make Silver</Tag>
									<Tag color="#cd7f32">Make Bronze</Tag>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>2</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Amira Ahsan</td>
								<td><Tag type="border" color="primary">Normal</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag color="#808080">Make Silver</Tag>
									<Tag color="#cd7f32">Make Bronze</Tag>
									<Tag color="warning">Make Gold</Tag>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

										<!-- ITEMS -->
							<tr>
								<td>3</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Andrew Russel</td>
								<td><Tag type="border" color="primary">Normal</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag color="#808080">Make Silver</Tag>
									<Tag color="#cd7f32">Make Bronze</Tag>
									<Tag color="warning">Make Gold</Tag>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>4</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Adam Smith</td>
								<td><Tag color="#808080">Silver</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag type="border" color="primary">Make Normal</Tag>
									<Tag color="#cd7f32">Make Bronze</Tag>
									<Tag color="warning">Make Gold</Tag>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>5</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Alexandar Hleb</td>
								<td><Tag color="#cd7f32">Bronze</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag type="border" color="primary">Make Normal</Tag>
									<Tag color="#808080">Make Silver</Tag>
									<Tag color="warning">Make Gold</Tag>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

                            <tr>
								<td>6</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Adam Lallana</td>
								<td><Tag color="warning">Gold</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag type="border" color="primary">Make Normal</Tag>
									<Tag color="#808080">Make Silver</Tag>
									<Tag color="#cd7f32">Make Bronze</Tag>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>7</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Antonio Smith</td>
								<td><Tag color="#808080">Silver</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag type="border" color="primary">Make Normal</Tag>
									<Tag color="#cd7f32">Make Bronze</Tag>
									<Tag color="warning">Make Gold</Tag>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

								<!-- ITEMS -->
							<tr>
								<td>8</td>
                                <td><Avatar style="background-color: #87d068" icon="ios-person" /></td>
								<td class="_table_name">Asif Zaman</td>
								<td><Tag type="border" color="primary">Normal</Tag></td>
								<td>
									<button class="_btn _action_btn view_btn1" type="button">View</button>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<Tag color="#808080">Make Silver</Tag>
									<Tag color="#cd7f32">Make Bronze</Tag>
									<Tag color="warning">Make Gold</Tag>
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