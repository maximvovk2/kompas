<?php
/* @var $this CompetitionController */
/* @var $data Competition */
?>

<div class="view">
    <li>
        <h3> <?php echo CHtml::link(CHtml::encode('«'.$data->title  . '» (' . $data->start_data . ' - ' . $data->end_data . ')'), array('view', 'id'=>$data->id)); ?></h3>
        <div class="row">
            <div class="small-3 large-4 columns">
                <a class="fancybox th radius" href="index.php?r=events/view&id=<?php echo $data->id; ?>">
                    <?php echo $data->getLogoImage(); ?>
                </a>
               
            </div>
            <div class="small-8 columns">
                <?php echo CHtml::encode($data->description); ?>
            </div>
            <div class="more">
                <div class="small-12 dop_in">Опубликовано: <?php echo CHtml::encode($data->create_date) . ';'; ?></div>
                <div class="small-8 dop_in">
                    <?php if($data->enable_registration_flag == 1){
                        echo '<b>Окончание онлайн регистраци : </b>' . $data->close_registration_data . '-' . $data->close_registration_time . ';';
                    } ?>      
                </div>
                <div class="small-12 dop_in">
                    <b><?php echo CHtml::encode($data->getAttributeLabel('enable_registration_flag')); ?>:</b>
                    <?php if($data->enable_registration_flag){ echo 'Да'; } else { echo 'Нет'; } ?></br>
                    Количество просмотров: <?php echo $data->views; ?></br>
                    Количество комментариев: <?php echo $data->getCommentCount(); ?></br>
                    Количество заявок: <?php echo $data->getCountRequest(); ?></br>    
                </div>
                <div class="small-12 text-right"><?php echo CHtml::link(CHtml::encode('Детальнее...'), array('view', 'id'=>$data->id)); ?></div>
            </div>
        </div>
    </li>
</div>