<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        // document.cookie = "Firstname = Harris 007; expires = Sun, 17 Oct 2025 00:00:00 UTC; path=/;";
        // document.cookie = "second = Syed 008; expires = Sun, 17 Oct 2025 00:00:00 UTC; path=/;";
        // document.cookie = "third = hafeez 006; expires = Sun, 17 Oct 2025 00:00:00 UTC; path=/;";
        // document.cookie = "fourth = murali 005; expires = Sun, 17 Oct 2025 00:00:00 UTC; path=/;";

        // console.log(document.cookie);

        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        setCookie("Name", "Harris", 2);
        setCookie("Age", "19", 2);
        setCookie("Clg", "JMC", 2);
        setCookie("Gender", "Male", 2);


        console.log(document.cookie)

        function getCookie(name) {
            const cdecode = decodeURIComponent(document.cookie);

            const cArray = cdecode.split("; ");
            console.log(cArray)
            
            let result;

             for(let i=0;i<=cArray.length;i++){   {
                if (cArray.indexOf(name) == 0) {
                    return result = cArray.substring(name.length + 1)
                }
            }
            return result;
        }
    }
        var ckk = getCookie("Name")
        console.log(ckk)

    </script>
</body>

</html>