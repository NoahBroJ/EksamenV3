<form id="upload-form" action="../backend/addProduct.php" method="POST">
    <div class="divider">
        <div>
            <input name="name" type="text" placeholder="Produktnavn">
            <input name="price" type="number" placeholder="Pris">
            <input name="category" type="text" placeholder="Kategori">
            <input name="img" type="text" placeholder="Billedsti">
        </div>
        <div>
            <textarea name="description" cols="30" rows="7" placeholder="Beskrivelse"></textarea>
        </div>
    </div>
    <input class="input" type="submit">
</form>