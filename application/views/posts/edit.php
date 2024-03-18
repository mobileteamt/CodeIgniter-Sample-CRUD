<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('posts/edit/'.$posts_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" placeholder="Please add the title" size="50" value="<?php echo $posts_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Text</label></td>
            <td><textarea name="text" rows="10" placeholder="Please add the text" cols="40"><?php echo $posts_item['text'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit posts item" /></td>
        </tr>
    </table>
</form>
