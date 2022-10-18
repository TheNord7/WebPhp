    <form action="/?controller=tasks&action=add" metod="post">
        <input type="text" name="task" placeholder="Опишите новую задачу">
        <input type="submit" value="Добавить">
    </form> 
    
    <?php foreach ($tasks as $key => $task): ?>
        <div>
            <?=$task->getDescription()?>
            <a href="/?controller=tasks&action=done&key=<?=$key?>">Done</a><br><br>
        </div>
    <?php endforeach; ?>
