<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav id="nav_bar">
        
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        function alert(type, msg) {
            let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
            let element = document.createElement('div');
            element.innerHTML = `<div class="alert ${bs_class} alert-warning alert-dismissible fade show custom-alert" role="alert"><strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
            document.body.append(element);
        }

        function setActive() {
            let navbar = document.getElementById('nav_bar');
            if (navbar) {
                let a_tags = navbar.getElementsByTagName('a');
                for (let i = 0; i < a_tags.length; i++) {
                    let file = a_tags[i].href.split('/').pop();
                    let file_name = file.split('.')[0];
                    if (document.location.href.indexOf(file_name) >= 0) {
                        a_tags[i].classList.add('active');
                    }
                }
            } else {
                console.error("Element with id 'nav_bar' not found.");
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            setActive();
        });
    </script>
</body>
</html>
