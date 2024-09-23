@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/16pt-uv-postcards.png') }}" class="img-fluid" alt="14pt Matte Finish Postcards">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>14pt UV Postcards</h1>
            <p>Postcards are a powerful and cost-effective marketing tool, particularly useful as a mailer. These postcards have a high gloss coating and are a good option for those seeking thicker cards.</p>

            <div class="product-order-box">
                <h4>Price this item:</h4>
                <form>
                    <!-- Stock Dropdown -->
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <select id="stock" class="form-control">
                            <option value="single">Single Side Printing (4/0)</option>
                            <option value="double">Double Sided Printing (4/4)</option>
                        </select>
                    </div>

                    <!-- Size Dropdown -->
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select id="size" class="form-control">
                            <option value="2.5x2.5">2.5 x 2.5</option>
                            <option value="4.25x2.75">4.25 x 2.75</option>
                            <option value="5.5x2.125">5.5 x 2.125</option> <!-- Fixed the decimal point -->
                            <option value="2x8">2 x 8</option>
                            <option value="4.25x3.66">4.25 x 3.66</option>
                            <option value="3x4">3 x 4</option>
                            <option value="4x4">4 x 4</option>
                            <option value="4.25x5.5">4.25 x 5.5</option>
                            <option value="8.5x2.75">8.5 x 2.75</option>
                            <option value="4x6">4 x 6</option>
                            <option value="4.25x6">4.25 x 6</option>
                            <option value="8.5x3.5">8.5 x 3.5</option>
                            <option value="8.5x3.66">8.5 x 3.66</option>
                            <option value="5x7">5 x 7</option>
                            <option value="4x9">4 x 9</option>
                            <option value="8x5">8 x 5</option>
                            <option value="8.5x5.5">8.5 x 5.5</option>
                            <option value="4.25x11">4.25 x 11</option>
                            <option value="8.5x6">8.5 x 6</option>
                            <option value="6x9">6 x 9</option>
                            <option value="6x11">6 x 11</option>
                            <option value="8.5x11">8.5 x 11</option>
                            <option value="11x17">11 x 17</option>
                        </select>
                    </div>

                    <!-- Quantity Dropdown -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <select id="qty" class="form-control">
                            <option value="1000">1000</option>
                            <option value="2500">2500</option>
                            <option value="5000">5000</option>
                            <option value="10000">10000</option>
                            <option value="15000">15000</option>
                            <option value="20000">20000</option>
                            <option value="25000">25000</option>
                            <option value="30000">30000</option>
                            <option value="35000">35000</option>
                            <option value="40000">40000</option>
                            <option value="45000">45000</option>
                            <option value="50000">50000</option>
                            <option value="55000">55000</option>
                            <option value="60000">60000</option>
                            <option value="65000">65000</option>
                            <option value="70000">70000</option>
                            <option value="75000">75000</option>
                            <option value="80000">80000</option>
                            <option value="85000">85000</option>
                            <option value="90000">90000</option>
                        </select>
                    </div>

                    <!-- Coating Dropdown -->
                    <div class="form-group">
                        <label for="coating">Coating</label>
                        <select id="coating" class="form-control">
                            <option value="matte">Matte Finish</option>
                        </select>
                    </div>

                    <!-- Scoring Dropdown -->
                    <div class="form-group">
                        <label for="scoring">Scoring</label>
                        <select id="scoring" class="form-control">
                            <option value="none">None</option>
                        </select>
                    </div>

                    <!-- Bundling Dropdown -->
                    <div class="form-group">
                        <label for="bundling">Bundling</label>
                        <select id="bundling" class="form-control">
                            <option value="No Bundling">No Bundling - Free</option>
                            <option value="Single band 25s">Single Bands 25s</option>
                            <option value="Single band 50s">Single Band 50s</option>
                            <option value="Single band 100s">Single Band 100s</option>
                            <option value="Double band 25s">Double Band 25s</option>
                            <option value="Double band 50s">Double Band 50s</option>
                            <option value="Double band 100s">Double Band 100s</option>
                            <option value="Shrink wrap 25s">Shrink Wrap 25s</option>
                            <option value="Shrink wrap 50s">Shrink Wrap 50s</option>
                        </select>
                    </div>

                    <!-- Turnaround Dropdown -->
                    <div class="form-group">
                        <label for="turnaround">Turnaround</label> <!-- Fixed label and value typos -->
                        <select id="turnaround" class="form-control">
                            <option value="2-3 Business Days">2-3 Business Days</option>
                            <option value="5-7 Business Days">5-7 Business Days</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$25.00</p>
                    </div>

                    <!-- Add to Cart Button -->
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Tabs for Details, File Prep, and Reviews -->
    <div class="row mt-5">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="productTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fileprep-tab" data-toggle="tab" href="#fileprep" role="tab">File Prep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">
                <!-- Details Tab -->
                <div class="tab-pane fade show active" id="details" role="tabpanel">
                    <h5>Product Details for 16pt Matte Finish Postcards</h5>
                    <p><strong>Paper Type:</strong> 10pt 95 Bright C2S Stock</p>
                    <p><strong>Sizes:</strong> Ranges from 2.25 x 2.25 to 11 x 17</p>
                    <p><strong>Coating:</strong> Matte Finish</p>
                    <p><strong>Finishing:</strong> Cut to size and boxed</p>
                    <p><strong>Quantities:</strong> 1000 - 90,000</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep for 14pt Matte Finish Postcards</h5>
                    <p>Make sure your file meets the following specifications:</p>
                    <ul>
                        <li>Resolution: 300 DPI</li>
                        <li>Bleed: 1/16 inch on all sides</li>
                        <li>Color Mode: CMYK</li>
                        <li>File Type: PDF format with bleeds</li>
                    </ul>
                </div>

                <!-- Reviews Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <h5>Customer Reviews</h5>
                    <p>★★★★★ "Great quality and quick turnaround!"</p>
                    <p>★★★★ "Very happy with the product."</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
