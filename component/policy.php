<div class="breadcrumbs clearfix">
    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <a  href="<?php echo URL_BASE ?>" itemprop="url">
            <span itemprop="title"><?php echo @T_HOME ?></span>
        </a>
    </div>
    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <span itemprop="title"><?php echo T_POLICY ?></span>
    </div>
</div>
<div class="box-title">
    <div class="box-outer-2 box-right">
           <h3 class="h2_category"><?php echo @T_POLICY?></h3>
            <Div class="content_about_index">
            <?php @readfile(PATH_APPLICATION.'policy.htm')?>
            </Div>
        </div>
</Div>