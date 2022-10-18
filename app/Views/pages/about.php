<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
    <h1>Kakulator Sederhana</h1>
<form action="">

    <div id="input-num1" class="mb-3">
        <label for="num1" class="label-form">Masukkan angka 1</label>
        <input type="number" nama="num1" id="num1">
    </div>

    <div id="input-num2" class="mb-3">
        <label for="num2" class="label-form">Masukkan angka 2</label>
        <input type="number" nama="num2" id="num2">
    </div>

    <div id="operasi">
        <label for="operation" class="label-form">Operasi</label>
        <select class="form-select mb-3 input-sm" name="operation" id="operation">
            <option class="operation" value="+">Tambah</option>
            <option class="operation" value="-">Kurang</option>
            <option class="operation" value="*">Kali</option>
            <option class="operation" value="/">Bagi</option>
        </select>
        <button type="button" id="btn"  class="button-74" role="button">Submit</button>
        
    </div>

    <div id="output">
        <label for="output" class="label-form">Hasil <p id="equal">=</p></label>
    </div>

        
    </div>
</form>
    <script>
        const tambah = (a,b) => a+b;
        const kurang = (a,b) => a-b;
        const kali = (a,b) => a*b;
        const bagi = (a,b) => a/b;

        const button = document.getElementById("btn");

        button.addEventListener("click", () =>{
            const num1 = parseInt(document.getElementById("num1").value);
            const num2 = parseInt(document.getElementById("num2").value);
            const operasi = document.getElementById("operation");
            const output = document.getElementById("equal");
            const operation = operasi.options[operasi.selectedIndex].value;

            let keluaran = 0;
            switch (operation) {
                case "+" : keluaran = tambah(num1,num2); break;
                case "-" : keluaran = kurang(num1,num2); break;
                case "*" : keluaran = kali(num1,num2); break;
                case "/" : keluaran = bagi(num1,num2); break;
            }
            output.innerHTML = "=  " + keluaran;
        });
    </script>
</body>
</html>