<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Themes and Colors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
            color: red;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .gallery div {
            flex-basis: calc(33.333% - 40px);
            margin: 10px;
            text-align: center;
        }
        @media (max-width: 768px) {
            .gallery div {
                flex-basis: calc(50% - 40px);
            }
        }
        @media (max-width: 480px) {
            .gallery div {
                flex-basis: 100%;
            }
        }
    </style>
</head>
<body>
    
   
    <div>
    <div>
    <h1>Color Combination</h1>
            <img src="C:\xampp\htdocs\eventmanager-Ezycard\IMAGES\color.jpg" alt="Color">
            
        </div>
    </div>
</body>
</html>
