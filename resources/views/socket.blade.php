<!DOCTYPE html>
<html lang="en">
<head>
    <title>Socket</title>

    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        Echo.channel('user')
            .listenToAll((event, data) => {
                console.log(event);
            })
    </script>
</head>
<body>

</body>
</html>
