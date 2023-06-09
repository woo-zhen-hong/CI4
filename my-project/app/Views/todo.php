<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script type=text/javascript>
        $(document).ready(function() {
            todoComponent.delete(7);
        });

        Let todoComponent = {
            index: function() {
                axios.get('http://localhost:8080/todo')
                    .then((response) => console.log(response))
                    .catch((error) => console.log(error.response.data.messages.error))
            },
            show: function(key) {
                axios.get('http://localhost:8080/todo/' + key)
                    .then((response) => console.log(response))
                    .catch((error) => console.log(error.response.data.messages.error))
            },
            create: function(data) {
                data = {
                    "title": "pass_in_title_6",
                    "content": "pass_in_content_6"
                };

                axios.post('http://localhost:8080/todo', JSON.stringify(data))
                    .then((response) => console.log(response))
                    .catch((error) => console.log(error.response.data.messages.error))
            },

</body>
</html>
