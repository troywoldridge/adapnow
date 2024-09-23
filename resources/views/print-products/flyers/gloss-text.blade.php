@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/100lb-gloss-text-flyers.png') }}" class="img-fluid" alt="Gloss Text Flyers">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Gloss Text Flyers</h1>
            <p>Flyers are great marketing tools that can be used to promote products and services. These flyers have a semi-gloss appearance and are the most popular.</p>

            <div class="product-order-box">
                <h4>Price this item:</h4>
                <form>
                    <!-- Add dropdowns for stock, size, quantity, etc. -->
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
                        <option value="3.5x8.5">3.5 x 8.5</option>
                        <option value="8.5x5.5">8.5 x 5.5</option>
                        <option value="4.25x11">4.25 x 11</option>
                        <option value="8.5x7">8.5 x 7</option>
                        <option value="8.5x7.5">8.5x7.5</option>
                        <option value="8x10">8 x 10</option>
                        <option value="8.5x11">8.5 x 11</option>
                        <option value="8.5x14">8.5 x 14</option>
                        <option value="9x12">9 x 12</option>
                        <option value="9x16">9 x 16</option>
                        <option value="8.5x17">8.5 x 17</option>
                        <option value="11x17">11 x 17</option>
                        <option value="11.5x17.5">11.5 x 17.5</option>
                        <option value="12x18">12 x 18</option>
                        <option value="17x22">17 x 22</option>
                        <option value="11x25.5">11 x 22.5</option>
                        </select>
                    </div>

                    <!-- Quantity Dropdown -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <select id="qty" class="form-control">
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                            <option value="750">750</option>
                            <option value="1000">1000</option>
                            <option value="1500">1500</option>
                            <option value="2000">2000</option>
                            <option value="2500">2500</option>
                            <option value="5000">5000</option>
                            <option value="7500">7500</option>
                            <option value="10000">10000</option>
                            <option value="15000">15000</option>
                            <option value="20000">20000</option>
                            <option value="25000">2500</option>
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
                            <option value="95000">95000</option>
                            <option value="100000">100000</option>
                        </select>
                    </div>

                    <!-- Coating Dropdown -->
                    <div class="form-group">
                        <label for="Coating">Coating</label>
                        <select id="Coating" class="form-control">
                            <option value="No Coating">No Coating</option>
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
                            <option value="Shrink wrap 100s">Shrink Wrap 100s</option>
                        </select>
                    </div>

                    <!-- Turnaround Dropdown -->
                    <div class="form-group">
                        <label for="turnaround">Turnaround</label>
                        <select id="turnaround" class="form-control">
                            <option value="Next Business day">Next Business Day</option>
                            <option value="2-4 Business Days">4-5 Business Days</option>
                        </select>
                         <!-- Price -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$21.00</p>
                    </div>
                    </div>
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
                    <h5>Product Details for Gloss Text Flyers</h5>
                    <p>100lb Glossy Text Stock</p>
                    <p>Quantities Ranges From 25 to 100000</p>
                    <p>Color: Full color CMYK: 1 sided (4/0), or 2 Sided (4/4)</p>
                    <p>Finishing: Cut to Size and Boxed. Optional Bundeling Available</p>
                    <p>Special Instructions: Flyers are shipped flat with no folding</p>
                    
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep for Gloss Text Flyers</h5>
                    <p>Ensure your file meets these specifications:</p>
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
                    <p>★★★★★ "Great quality and fast shipping!"</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
