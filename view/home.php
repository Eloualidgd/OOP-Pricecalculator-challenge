<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view</title>
</head>
<body>
<!--<h2> Your name is --><?php //echo $customer->getName() . "<br>" ;
//     echo $customer->getId() . "<br> " ; echo $customer->getGroup();
//    ?><!-- </h2>-->
<!--<h2> Your name is : --><?php //echo $customer->getName()?><!--  </h2>-->


<select>
    <?php foreach($allCustomers AS $customerItem):?>
        <option value="<?php echo $customerItem->getId()?>"><?php echo $customerItem->getName()?></option>
    <?php endforeach; ?>
</select>

<h2> Your Id is : <?php echo $customer->getId()?> </h2>
<h2>  Your group n° is : <?php echo $customer->getGroup()?>  </h2>

</body>
</html>