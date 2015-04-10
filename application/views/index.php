<html>
    <head>
        <title>BSides Iowa 2015 Vulnerable Web app</title>
    </head>
    <body>
        <form action="/xss/submit" method="POST">
            <input type="text" name="input">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
