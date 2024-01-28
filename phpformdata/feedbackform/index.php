<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="result.php" method="post">
            <h1>Feedback Form></h1>
            <div>
                <label for="name">Your name (optional)</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="course">Course Title</label>
                <input type="text" id="course" name="course">
            </div>
            <div>
                <label for="score">Given score (1-10)</label>
                <select name="score" id="score">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div>
                <label for="reason">Reason</label>
                <textarea name="reason" id="reason"> </textarea>
            </div>
            <input type="submit">
        </form>
    </body>
</html>