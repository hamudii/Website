<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="./bio.css">
</head>
<body>
    <h1>Biodata</h1> 
    <form class="page">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" name="npm" id="npm" class="form-control" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" autocomplete="off" required></textarea>
        </div>

        <div class="mb-3">
            <label for="tmpt-lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tmpt-lahir" id="tmpt-lahir" class="form-control" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl-lahir" id="tgl-lahir" class="form-control" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
            <div id="gender">
                <div>
                    <input type="radio"id="laki"class="btn-check"name="jk"value="Laki-Laki"required>

                    <label for="laki" class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                        </svg>
                        Laki-Laki
                    </label>
                </div>
                <div>
                    <input type="radio"id="perempuan"class="btn-check"name="jk"value="Perempuan">
                    <label for="perempuan" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z"/>
                        </svg>
                        Perempuan
                    </label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="hobby" class="form-label">Hobby</label>
            <textarea type="text" name="hobby" id="hobby" class="form-control" autocomplete="off" required> </textarea>
        </div>

        <button type="submit" name="submit" class="btn" id="submit">Submit</button>

    </form>
    <div id="hasil"></div>




    <script>
        const addButton=document.getElementById("add-btn")
        const inputDiv=document.getElementById("input-hobby");
        const deleteButton=document.getElementById("delete")
        const hobbyInput=document.getElementsByClassName("hobby")
        let i=3;

        addButton.addEventListener("click", () => {
            inputDiv.innerHTML += `
            <div id="hobby-${++i}" class="hobby">
                <input type="text"id="hobby"name="hobby[]"class="form-control">
            </div>
            `
        })


        deleteButton.addEventListener("click", () => {
            hobbyInput[0].parentNode.removeChild(hobbyInput[hobbyInput.length-1])
        })

    </script>

    <script src="bio.js"></script>  
</body>
</html>