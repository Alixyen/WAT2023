<?php
?>

<!DOCTYPE html>
<html>
    <head>
        <title> CSS worksheet </title>
        <link href="../style/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>


        <h1 id="main-heading" class="highlight">Funadamentals of CSS</h1>
            <h2 id="cascading">Cascading</h2>
            <p> Stlye can added as an inline elment using the style attribute on tags as is the case for this paragraph. Here font-weight has been given a weight of 800. </p>

            <p style="font-family: Arial, sans-serif; color: green;">The inline style takes precendent over all other style
                declartions. Next in order of precedent is the embedded style.
                This section of a page. This pre tag is styled with embedded style.
                An extra large green font.</p>

            <p> Ideally style is held seperate to structure in a style sheet Other than the 2 examples above all style on this page is in a seperate style sheet. Including the change of base font to Arial. </p>

        <h2  <h2 id="selectors" style="font-family: Impact, sans-serif;">Selectors</h2>
        <p>CSS selectors are used to apply style. There is the element selector, class selector and id selector. All being well you have used an element selctor to modify the font on this page by adding style the body tag in your attached style sheet. Words in this <span style="color: purple;">s e n t e n c e</span> have been <span style="color: purple;">s t y l e d</span> using a class selector applied to letter-spacing and the heading for this section with an id selector. </p>

        <h2 id="box-model">Box Model</h2>

                    <style>
                    .container {
                        display: flex;
                    }
                    .box {
                        flex: 1;
                        width: 200px;
                        height: 50px;
                        background-color: #f0f0f0; /* Grey background color */
                        border: 2px solid #888; /* Grey border */
                        margin-right: 20px; /* Margin between boxes */
                        padding: 10px; /* Padding inside boxes */
                    }
                </style>

            <div class="container">
                <div class="box">
                    <a href="https://www.tutorialrepublic.com/html-tutorial/">https://www.tutorialrepublic.com/html-tutorial/</a>
                </div>
                <div class="box">
                    <a href="https://www.tutorialrepublic.com/css-tutorial/">https://www.tutorialrepublic.com/css-tutorial/</a>
                </div>
                <div class="box">
                    <a href="https://www.w3schools.com/">https://www.w3schools.com/</a>
                </div>
            </div>

        <p> This links above are held in a list that is re-styled to remove list-style-type and display inline. Padding, margin and boarder are then added as appropriate.</p>

        <h2 id="Layout">Layout</h2>

        <div class ="parent-container"
        <div class="container">
            <div class="box">
                <p>These words are in column 1</p>
            </div>
            <div class="middle-box">
                <p>These words are in column 2</p>
            </div>
            <div class="end-box">
                <p>These words are in column 3</p>
            </div>

        </div>
            <p>margin, padding, boarders and floats can be added to achieve this layout of columns.</p>

    </body>
</html>