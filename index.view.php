
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning PHP</title>
        <style>
            header {
                color: white;
                background: green;
                padding: 1em;
                font-size: 2em;
                text-align: center;
            }
            .lists {display:flex;flex-direction:row;flex-wrap:wrap;}
            .lists>div {display:block;padding:1em;margin:0 0 1em 2em;border:1px dotted green;}
            .lists ul {min-width: 7em;max-width:210px;list-style-type:disc;padding-left:1em;}
            .lists ul li {padding-left:1em;}
            /*#toread-list ul li::before {content:"\1F4D6 ";margin-right:0.5em;padding-bottom:1.2em;}*/
            #toread-list ul {list-style-type: "\1F4D6";}
            #shopping-list ul {list-style-type: "\1F5D2";}
            #animal-list ul {list-style-type: "\1F98D";}
            #todo-list ul {list-style-type: "\231B";}
        </style>
</head>
<body>
<header><?= $greeting . ", " . $name . "!"; ?></header>
<div class="lists">
    
<div id="animal-list"><h2>Animals</h2>
    <ul>
    <?php foreach ($animals as $animal) :?> 
           <?php if ($animal == $name) : ?>
            <li><?= 'Not ' . $animal;?>
            <?php else : ?><li><?= $animal; ?></li>
            <?php endif; ?>
            
        <?php endforeach; ?>
</ul></div>

<div id="shopping-list"><h2>Shopping List</h2>
    <ul>
        <?php foreach ($items as $item) : ?>
            <li><?= $item; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<div id="todo-list"><h2>To Do</h2>
    <ul>
<?php foreach ($todo as $job) : ?>
    <li><?= $job; ?></li>
<? endforeach; ?>
</ul></div>

<div id="shopping-list"><h2>To get</h2>
    <ul><?php shuffle($animals);?>
        <?php foreach ($animals as $animal) :?> 
           <?php if ($animal == $name) : ?>
            <li><?= 'Not ' . $animal;?>
            <?php else : ?><li><?= $animal; ?></li>
            <?php endif; ?>
            
        <?php endforeach; ?>
    </ul>
</div>

<div id="toread-list"><h2>To Read</h2>
    <ul>
<?php foreach ($books as $book) : ?>
    <li><?= $book; ?></li>
<? endforeach; ?>
</ul></div>

</div>


</body>
</html>