<?php include('includes/header.php');?>
<div class="form-container">
    <h2>Bill Processing Form</h2>
    <form action="#" method="post">
        <div class="form-group">
            <!-- <label for="numberOfItems">Vendor</label>
            <input type="text" id="numberOfItems" name="numberOfItems" required> -->
            <label for="vendor">Vendor</label>
            <select id="vendor" name="vendor">
                <option value="tamreen">Tamreen Computers</option>
                <option value="soul">Computer Soul</option>
                <option value="onestop">OneStop Technologies</option>
                <option value="computerVillage">Computer Village</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numberOfItems">Number of Items</label>
            <input type="number" id="numberOfItems" name="numberOfItems" required>
        </div>
        <div class="form-group">
            <label for="itemDescription1">Item Description 1</label>
            <input type="text" id="itemDescription1" name="itemDescription1" required>
        </div>
        <div class="form-group">
            <label for="price1">Price 1</label>
            <input type="number" id="price1" name="price1" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="itemDescription2">Item Description 2</label>
            <input type="text" id="itemDescription2" name="itemDescription2">
        </div>
        <div class="form-group">
            <label for="price2">Price 2</label>
            <input type="number" id="price2" name="price2" step="0.01">
        </div>
        <div class="form-group">
            <label for="itemDescription3">Item Description 3</label>
            <input type="text" id="itemDescription3" name="itemDescription3">
        </div>
        <div class="form-group">
            <label for="price3">Price 3</label>
            <input type="number" id="price3" name="price3" step="0.01">
        </div>
        <div class="form-group">
            <label for="taxVat">VAT & TAX</label>
            <select id="taxVat" name="taxVat">
                <option value="includingTax">Including TAX</option>
                <option value="excludingVat">Excluding VAT</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
<?php include('includes/footer.php'); ?>