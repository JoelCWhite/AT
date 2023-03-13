<?php
    include 'search/getCurl.php';
?>

<div>
    <div>
        <h1 class="titleForTest" >Product Search</h1>
    </div>
    <div class='searchSection'>
        <div class="searchInputSection">
            <label for="searchTitle">Title:</label><br>
            <input type="text" id="searchTitle" name="searchTitle" value=<?php echo $searchTerm; ?> >
            
        </div>
        <div class="searchInputSection">
            <label for="limitResults">Limit Results:</label><br>
            <input type="number" id="limitResults" name="limitResults" size='3' maxlength="3" value=<?php echo $limitResults; ?> >
            <Button onclick="searchByTerm()" href='#'>Search</Button>
        </div>
    </div>
    <div>
        <table>
            <tr class="tableHeader">
                <th>Image</th>
                <th>Title</th>
                <th>Destination</th>
            </tr>
            <?php if(count((array)$result) >= 2){ ?>
                <?php foreach ($result->data as $value) { ?>
                    <tr class="tableData">
                        <td> <img class="smallImage" src="<?php echo $value->img_sml; ?>" alt="<?php echo $value->title; ?>" > </td>
                        <td class="titleAT"> <?php echo $value->title; ?> </td>
                        <td> <?php echo $value->dest; ?> </td>
                    </tr>
                <?php } ?>
            <?php } ?>
            
        </table> 
    </div>
</div>