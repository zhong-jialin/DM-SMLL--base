<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="css/amazeui.min.css" />
		<link rel="stylesheet" href="css/admin.css" />
	</head>

	<body>
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户管理</strong><small></small></div>
			</div>

			<hr>

			<div class="am-g">
				<div class="am-u-sm-12 am-u-md-6">
					<div class="am-btn-toolbar">
						<div class="am-btn-group am-btn-group-xs">
							<button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span>
                                                        <a href='user_add.php'><i class="fa fa-hand-spock-o"></i>添加用户</a></button>
						</div>
					</div>
				</div>
				<div class="am-u-sm-12 am-u-md-3">

				</div>
				<div class="am-u-sm-12 am-u-md-3">
					<div class="am-input-group am-input-group-sm">
						<input type="text" class="am-form-field">
						<span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
					</div>
				</div>
			</div>
			<div class="am-g">
				<div class="am-u-sm-12">
					<form class="am-form">
						<table class="am-table am-table-striped am-table-hover table-main">
							<thead>
								<tr>
									<th class="table-check"><input type="checkbox"></th>
									<th class="table-id">ID</th>
									<th class="table-title">用户名</th>
									<th class="table-type">用户密码</th>
									<th class="table-author am-hide-sm-only">电话</th>
									<th class="table-set">操作</th>
								</tr>
							</thead>
							<tbody>
                                                                    <?php
                                                                            require_once('conn.php');
                                                                            include_once 'dbsql.php';
                                                                            include_once 'page.php';
                                                                            $db=new DbMysql();
                                                                            $result=$db->select("select * from user");
                                                                            $infocount=$db->affected();
                                                                            $psize=10;
                                                                            $page=new Page($infocount, $psize);
                                                                            $sql="select * from user ";
                                                                            $sql.=$page->limit();
                                                                            $result=$db->select($sql);
                                                                            foreach ($result as $row)
                                                                                {
                                                                             ?> 
								<tr>
									<td><input type="checkbox"></td>
									<td><?php echo $row['id']?></td>
									<td>
										<a href="#"><?php echo $row['username']?></a>
									</td>
									<td><?php echo $row['password']?></td>
									<td class="am-hide-sm-only"><?php echo $row['tel']?></td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 
                                                                                              <a href="user_upd.php?id=<?php echo $row['id']?>">修改</a></button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                                                                
                                                                                                <a href="user_delsave.php?id=<?php echo $row['id']?>">删除</a></button>
											</div>
										</div>
									</td>
								</tr>
							            <?php
                                                                            }
                                                                    ?>
							</tbody>
						</table>
						<div class="am-cf">
                                                               <div id="page">
                                                                     <?php
                                                                        $page-> pagesinfo();
                                                                        echo $page->show(1);
                                                                     ?>
                                                                </div>
						</div>
						<hr>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>