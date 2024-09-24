@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/14pt-magnets.jpg') }}" class="img-fluid" alt="Standard Magnets">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Standard Magnets</h1>
            <p>Print magnets in the shape that your clients want with these cut-to-shape custom magnets.</p>
            <p>Printed on flexible 30mil magnet substrate. Available in standard or custom shapes. Adheres to indoor and outdoor magnetic surfaces.</p>

            <div class="form-group product-order-box">
                <h4>Price this item:</h4>
                
                <!-- Shape Options (Radio Buttons) -->
                <div class="form-group">
                    <label for="shape">Shape</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shape" id="shape-oval" value="Oval" checked>
                        <label class="form-check-label" for="shape-oval">Oval</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shape" id="shape-square" value="Square">
                        <label class="form-check-label" for="shape-square">Square</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shape" id="shape-circle" value="Circle">
                        <label class="form-check-label" for="shape-circle">Circle</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shape" id="shape-rectangle" value="Rectangle">
                        <label class="form-check-label" for="shape-rectangle">Rectangle</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shape" id="shape-custom" value="Custom">
                        <label class="form-check-label" for="shape-custom">Custom</label>
                    </div>
                </div>

                <!-- Stock Dropdown -->
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <select id="stock" class="form-control">
                        <option value="single">Single Side Printing (4/0)</option>
                        <option value="double">Double Side Printing (4/4)</option>
                    </select>
                </div>

                <!-- Size Dropdown -->
                <div class="form-group">
                    <label for="size">Size</label>
                    <select id="size" class="form-control">
                        <option value="3x4">3x4</option>
                        <option value="3.5x2">3.5x2</option>
                        <option value="3.5x8.5">3.5x8.5</option>
                        <option value="4x6">4x6</option>
                        <option value="4x7">4x7</option>
                        <option value="4x8">4x8</option>
                        <option value="4x9">4x9</option>
                        <option value="4x11">4x11</option>
                        <option value="4.25x5.5">4.25x5.5</option>
                        <option value="4.25x6">4.25x6</option>
                        <option value="5.5x8.5">5.5x8.5</option>
                        <option value="5x7">5x7</option>
                        <option value="6x8">6x8</option>
                    </select>
                </div>

                <!-- Quantity Dropdown -->
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <select id="qty" class="form-control">
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="250">250</option>
                        <option value="500">500</option>
                        <option value="750">750</option>
                        <option value="1000">1000</option>
                        <option value="2500">2500</option>
                    </select>
                </div>

                <!-- Coating Dropdown -->
                <div class="form-group">
                    <label for="coating">Coating</label>
                    <select id="coating" class="form-control">
                        <option value="None">None</option>
                        <option value="Gloss">Gloss</option>
                        <option value="Matte">Matte</option>
                    </select>
                </div>

                <!-- Turnaround Dropdown -->
                <div class="form-group">
                    <label for="turnaround">Turnaround</label>
                    <select id="turnaround" class="form-control">
                        <option value="5-7 Business Days">5-7 Business Days</option>
                        <option value="3-5 Business Days">3-5 Business Days</option>
                        <option value="Next Day">Next Day</option>
                    </select>
                </div>

                <!-- Shipping Options Dropdown -->
                <div class="form-group">
                    <label for="shipping">Shipping Method</label>
                    <select id="shipping" class="form-control">
                        <option value="Standard">Standard Shipping (5-7 Business Days)</option>
                        <option value="Expedited">Expedited Shipping (2-3 Business Days)</option>
                        <option value="Overnight">Overnight Shipping (Next Business Day)</option>
                    </select>
                </div>

                <!-- Price -->
                <div class="product-price">
                    <h4>Regular Price:</h4>
                    <p>$32.00</p>
                </div>

                <!-- Add to Cart Button -->
                <button type="button" class="btn btn-primary">Add to Cart</button>
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
                    <h5>Product Details for Cut To Shape Magnets</h5>
                    <p><strong>Paper Type:</strong> 30 mil flexible Magnet Stock</p>
                    <p><strong>Sizes:</strong> 3x4, 3.5x2, 3.5x8.5, 4x6, 4x7, 4x9, 5x7</p>
                    <p><strong>Coating:</strong> None, Gloss, Matte</p>
                    <p><strong>Finishing:</strong> Trim and Boxed</p>
                    <p><strong>Quantities:</strong> 25 - 2500</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep for Cut To Shape Magnets</h5>
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

                <!-- Boxes Section (Below the Main Product Info) -->
                <div class="container my-5">
                    <div class="row">
                        <!-- Box 1 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/all-images/20mil-cut-to-shape-magnets-3.png') }}" class="card-img-top" alt="Standard or Custom Shapes">
                                <div class="card-body">
                                    <h5 class="card-title">Standard or Custom Shapes</h5>
                                    <p class="card-text">Choose a standard shape, or select the custom shape option and provide a dieline in your file. We'll cut the magnets to the shape you need.</p>
                                </div>
                            </div>
                        </div>
                
                        <!-- Box 2 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/all-images/30-mil-cut-to-shape-magnets-2.png') }}" class="card-img-top" alt="Powerful Branding Tools">
                                <div class="card-body">
                                    <h5 class="card-title">Powerful Branding Tools</h5>
                                    <p class="card-text">Cut to shape magnets are perfect for branding. Get logos or unique designs printed on a magnet for a creative marketing tool that’s practical too.</p>
                                </div>
                            </div>
                        </div>
                
                        <!-- Box 3 -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('images/all-images/30mil-cut-to-shape-magnets.png') }}" class="card-img-top" alt="High Quality Magnets">
                                <div class="card-body">
                                    <h5 class="card-title">High Quality Magnets</h5>
                                    <p class="card-text">This thick magnet substrate is suitable for both indoor and outdoor use. It will not de-magnetize and even contains anti-rust properties.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
