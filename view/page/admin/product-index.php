<div class="container">
    <div class="row">
        <div class="col l3 s12 m-b-1">
            <a class="waves-effect waves-light btn blue lighten-2 btn-block" href="<?=baseurl('admin/product-create')?>">
                <i class="material-icons left">add</i>New Product
            </a>
        </div>
        <div class="col l3 s12 m-b-1">
            <a class="waves-effect waves-light btn blue lighten-2 btn-block" href="<?=baseurl('admin/category')?>">
                <i class="material-icons left">border_all</i>Category List
            </a>
        </div>
        <div class="col l3 s12 m-b-1">
            <a class="waves-effect waves-light btn blue lighten-2 btn-block" href="<?=baseurl('admin/order')?>">
                <i class="material-icons left">receipt</i>Order List
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <ul class="collection">
                <?php foreach($products as $key => $product) : ?>
                    <li class="collection-item avatar">
                        <img src="<?=$product['images']?>" alt="<?=$product['slug']?>" class="circle">
                        <b><span class="title bold"><?=$product['name']?></span></b><br/>
                        <small class="quantity">Stock : <b><?=number_format($product['quantity'])?></b></small><br/>
                        <small class="price">Price : <b>Rp. <?=number_format($product['price'])?></b></small>
                        <div class="secondary-content">
                            <a href="<?=baseurl('admin/product-edit/'.$product['id'])?>"><i class="material-icons blue-text text-lighten-1">edit</i></a>
                            <a href="<?=baseurl('admin/product-delete/'.$product['id'])?>"><i class="material-icons red-text text-lighten-2">delete</i></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>