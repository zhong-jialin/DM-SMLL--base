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
				<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">产品管理</strong><small></small></div>
			</div>

			<hr>

			<div class="am-g">
				<div class="am-u-sm-12 am-u-md-6">
					<div class="am-btn-toolbar">
						<div class="am-btn-group am-btn-group-xs">
							<button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span>
                                                        <a href='product_add.php'><i class="fa fa-hand-spock-o"></i>添加产品分类</a></button>
						</div>
					</div>
				</div>
				<div class="am-u-sm-12 am-u-md-3">

				</div>
                            <form class="" action="search.php" method="post">
				<div class="am-u-sm-12 am-u-md-3">
					<div class="am-input-group am-input-group-sm">
                                            <input type="text" name="search" class="am-form-field">
						<span class="am-input-group-btn">
                                                    <button class="am-btn am-btn-default" type="submit">搜索</button>
          </span>
					</div>
				</div>
                            </form>
			</div>
			<div class="am-g">
				<div class="am-u-sm-12">
					<form class="am-form">
						<table class="am-table am-table-striped am-table-hover table-main">
							<thead>
								<tr>
									<th class="table-check"><input type="checkbox"></th>
									<th class="table-type">商品编号</th>
									<th class="table-title">商品名字</th>
									<th class="table-type">商品类型</th>
                                                                        <th class="table-type">库存</th>
                                                                        <th class="table-type">价格</th>
									<th class="table-author am-hide-sm-only">图片地址</th>
									<th class="table-date am-hide-sm-only">商品属性</th>
									<th class="table-set">操作</th>
								</tr>
							</thead>
							<tbody>
                                                                      <?php
                                                                            include_once 'dbsql.php';
                                                                            include_once 'page.php';
                                                                            $db=new DbMysql();
                                                                            $result=$db->select("select * from product");
                                                                            $infocount=$db->affected();
                                                                            $psize=10;
                                                                            $page=new Page($infocount, $psize);
                                                                            $sql="select product.*,productype.typename from product inner join productype on product.typeid=productype.id ";
                                                                            $sql.=$page->limit();
                                                                            $result=$db->select($sql);
                                                                            foreach($result as $row)
                                                                                {
                                                                               ?>
								<tr>
									<td><input type="checkbox"></td>
									<td><?php echo$row['numbers']?></td>
									<td><?php echo$row['title']?></td>
                                                                        <td><?php echo$row['typename']?></td>
                                                                        <td><?php echo$row['kucun']?></td>
                                                                        <td><?php echo$row['price']?></td>
									<td class="am-hide-sm-only"><?php echo$row['picurl']?></td>
									<td class="am-hide-sm-only"><?php echo$row['content']?></td>
									<td>
										<div class="am-btn-toolbar">
											<div class="am-btn-group am-btn-group-xs">
												<button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span>
                                                                                                    <a href="product_upd.php?id=<?php echo $row['id']?>">修改</a></button>
												<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>
                                                                                                    <a href="product_delsave.php?id=<?php echo $row['id']?>">删除</a></button>
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
                                                                    分页：
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