
<div class="container">
  <div class="card bg-white text-center my-auto" style="height:250px;">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"	onclick="cl(&#39;#cover&#39;)">╳</a>    
    </div>

    
    <h3 class="cent">新增圖片</h3>
    <hr>
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>圖片</td>
            <td><input type="file" name="file" id=""></td>
        </tr>
        <tr>
            <td>文字</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
        <input type="hidden" name="table" value=<?=$_GET['table'];?>>
    </table>
        <div class="cent">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </div>
    </form>
  </div>
</div>