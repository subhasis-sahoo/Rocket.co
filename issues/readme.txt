1.
    <link rel="stylesheet" href="utility.css"> // might not working prooperly
    <link rel="stylesheet" href="utility.css?v=<?php echo time(); ?>"> // work prooperly
    Reason:
        its probably a cache issue, just delete all browsing data's, history, cache, cookies, e.t.c and then close the browser and open again, it should fix the problem as it fixed mine.

        But the best way to actually fix this problem is by calling the css file with php. i recommend calling your css stylesheet with php because, if your website is online , you can't tell all your users to delete their browsing data every time you apply a change on the website

        its very simple, first you write the style tag then call the css file with php.

2. $conn->close() // close the database so that other functions can't work properly and give a fatal error.