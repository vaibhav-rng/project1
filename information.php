<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Page</title>
    <link rel="stylesheet" href="information.css">
</head>

<body style="background-color: #d9d8e6;">
    <div class="navi">
        <nav>
            <a href="home.html">Home</a>
            <a href="register.php">TAKE QUIZ</a>
            <a href="information.php">LEARN</a>
            <a href="learn.html">SIMULATION</a>
            <a href="about.html">ABOUT US</a>
            <div class="animation start-home"></div>
        </nav>
    </div>
    <!-- <div style="border: 2px solid; height: 40px;margin-bottom: -50px; border-radius: 10px; margin-top: 10px; background-color: #34495e;">
        <span onclick="window.location.href='./register.html'" class="topn">Home</span>
        <span class="topn">Learn</span>
        <span class="topn">About us</span>
        <span onclick="window.location.href='./level.html'" class="topn">Take Quiz</span>
        <span onclick="window.location.href='./learn.html'" class="topn">Simulation</span>
        <span class="topn">contact us</span>
    </div><br><br> -->
    
    <header>
        <h1>ADT ARRAY</h1>
    </header>
    <section>
        <h2>Abstract Data Type</h2>
        <p>Abstract Data type (ADT) is a type (or class) for objects whose behaviour is defined by a set of value and a set of operations. The definition of ADT only mentions what operations are to be performed but not how these operations will be implemented.
            It does not specify how data will be organized in memory and what algorithms will be used for implementing the operations. It is called “abstract” because it gives an implementation-independent view. The process of providing only the essentials
            and hiding the details is known as abstraction.</p>
        <?php include('dbConfig.php'); ?>
        <?php   
                $result = $db->query("SELECT image FROM images WHERE id=2"); 
         ?>
        <?php if($result->num_rows > 0){ ?> 
    
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
        <?php } ?> 
        
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>


        <iframe width="450px" height="250" src="https://www.youtube.com/embed/bR0NYdmMg94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section><br><br>
    <section>
        <h2> ADT Array</h2>
        <p>An array is a collection of items stored at contiguous memory locations. The idea is to store multiple items of the same type together. This makes it easier to calculate the position of each element by simply adding an offset to a base value,
            i.e., the memory location of the first element of the array (generally denoted by the name of the array). The base value is index 0 and the difference between the two indexes is the offset.
            <br><br> Types of indexing in an array:<br><br> 0 (zero-based indexing): The first element of the array is indexed by a subscript of 0.<br><br> 1 (one-based indexing): The first element of the array is indexed by the subscript of 1.<br><br>            n (n-based indexing): The base index of an array can be freely chosen. Usually, programming languages allowing n-based indexing also allow negative index values, and other scalar data types like enumerations, or characters may be used as an
            array index.<br><br>

        </p>
        <?php   
                $result = $db->query("SELECT image FROM images WHERE id=3"); 
         ?>
        <?php if($result->num_rows > 0){ ?> 
    
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
        <?php } ?> 
        
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>
        <iframe width="450" height="250" src="https://www.youtube.com/embed/JqvobBKLHwU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </section><br><br>
    <section>
        <h2>Insertion</h2>
        <p>When the insertion happens at the beginning, it causes all the existing data items to shift one step downward. Here, we design and implement an algorithm to insert an element at the beginning of an array. We assume A is an array with N elements.
            The maximum numbers of elements it can store is defined by MAX. We shall first check if an array has any empty space to store any element and then we proceed with the insertion process.
        </p>
        <?php   
                $result = $db->query("SELECT image FROM images WHERE id=5"); 
         ?>
        <?php if($result->num_rows > 0){ ?> 
    
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
        <?php } ?> 
        
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>
        <iframe width="450px" height="250" src="https://www.youtube.com/embed/bR0NYdmMg94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section><br><br>
    <section>
        <h2>Searching</h2>
        <p>Linear search or sequential search is a method for finding a target value within a list. It sequentially checks each element of the list for the target value until a match is found or until all the elements have been searched.<br><br> “The linear
            search is a very simple algorithm. Sometimes called a sequential search, it uses a loop to sequentially step through an array, starting with the first element. It compares each element with the value being searched for, and stops when either
            the value is found or the end of the array is encountered. If the value being searched for is not in the array, the algorithm will search to the end of the array.”
        </p>
        <?php   $result = $db->query("SELECT image FROM images WHERE id=6"); ?>
        <?php if($result->num_rows > 0){ ?> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
        <?php } ?> 
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>
        <iframe width="450" height="250" src="https://www.youtube.com/embed/ZHCP9vFOJiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section><br><br>
    <section>
        <h2>Sorting</h2>
        <p>Sorting an array means to arrange the elements in the array in a certain order. Various algorithms have been designed that sort the array using different methods. Some of these sorts are more useful than the others in certain situations. Internal
            sorting means that all the data that is to be sorted is stored in memory while sorting is in progress.
            <br> External sorting means that the data is stored outside memory (like on disk) and only loaded into memory in small chunks. External sorting is usually applied in cases when data can’t fit into memory entirely, effectively allowing to sort
            data that does not fit in the memory.
        </p>
        <?php   $result = $db->query("SELECT image FROM images WHERE id=7"); ?>
        <?php if($result->num_rows > 0){ ?> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
        <?php } ?> 
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>
        <iframe width="853" height="480" src="https://www.youtube.com/embed/ByLlEk7zmyw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section><br><br>
    <section>
        <h2>Deletion</h2>
        <p>To delete a specific element from an array, a user must define the position from which the array's element should be removed. The deletion of the element does not affect the size of an array. Furthermore, we should also check whether the deletion
            is possible or not in an array..<br><br> For example, suppose an array contains seven elements, arr[] = {10, 25, 14, 8, 12, 15, 5); and the user want to delete element 8. So, first, the user must define the position of the 8th element, which
            is the 4th, and then check whether the deletion is possible or not. The position of the particular element should not be more than the total elements of an array. Here, we have 7 elements in an array, and the user wants to delete the 8th position
            element, which is impossible.

        </p>
        <?php   $result = $db->query("SELECT image FROM images WHERE id=4"); ?>
        <?php if($result->num_rows > 0){ ?> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
        <?php } ?> 
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>
        <iframe width="853" height="480" src="https://www.youtube.com/embed/2jVcRw1jP9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section><br><br><br><br>
    <?php
        $db->close();
    ?>
</body>

</html>