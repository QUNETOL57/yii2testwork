

<button class="btn btn-success" id="btn">Click</button>
<?php
//$this->title = "One article"
?>
<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<h1>Show Action!!!</h1>

<?php foreach ($cats as $cat){
    echo '<ul>';
        echo '<li>' . $cat->title . '</li>';
        $products = $cat->products;
        foreach ($products as $product){
            echo '<ul>';
                echo '<li>' . $product->title . '</li>';
            echo '</ul>';
        }
    echo '</ul>';
}?>

<?php //\frontend\controllers\debug($cats)?>
<?php //echo count($cats->products)?>
<?php //\frontend\controllers\debug($cats)?>

<?php
    $js = <<<JS
        $('#btn').on('click', function(){
            $.ajax({
                url: 'index.php?r=post/index',
                data: {test: '123'},
                type: 'POST',
                success: function (res){
                    console.log(res);
                },
                error: function() {
                  alert('Error!!!')
                }
            });
        });
JS;

    $this->registerJs($js)
?>

