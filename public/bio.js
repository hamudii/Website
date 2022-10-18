const send = document.getElementById("submit")
const output = document.getElementById("hasil")

document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault()

    const npm = document.getElementById("npm").value;
    const fullname = document.getElementById("nama").value;
    const alamat = document.getElementById("alamat").value;
    const tmpt_lahir = document.getElementById("tmpt-lahir").value;
    const tgl_lahir = document.getElementById("tgl-lahir").value;
    const jk = document.querySelector("input[name='jk']:checked").value;
    const hobby = document.getElementById("hobby").value;

    
    output.innerHTML = `
        <table class="tabel">
            <thead>
                <tr>
                    <h2 class ="tittble" style="text-align: center;">Tabel Hasil Form</h2>
                </tr>

                <tr>
                    <th>NPM</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>${npm}</td>
                    <td>${fullname}</td>
                    <td>${alamat}</td>
                    <td>${tmpt_lahir}</td>
                    <td>${tgl_lahir}</td>
                    <td>${jk}</td>
                    <td>${hobby}</td>
                </tr>
            </tbody>
        </table>
    `

    
});