@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/100lb-gloss-text-brochures.jpg') }}" class="img-fluid" alt="Gloss Text Brochures">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-6">
            <h1>Gloss Text Brochures</h1>
            <p>Our Gloss Text Brochures are printed on high-quality, shiny paper, offering a vibrant and professional finish. These brochures are perfect for colorful designs and impactful marketing materials.</p>

            <div class="product-order-box">
                <h4>Price this item:</h4>
                <form>
                    <!-- Stock Dropdown -->
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <select id="stock" class="form-control">
                            <option value="gloss-text">Gloss Text Paper</option>
                        </select>
                    </div>

                    <!-- Size Dropdown -->
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select id="size" class="form-control">
                            <option value="8.5x11">8.5 x 11</option>
                            <option value="11x17">11 x 17</option>
                            <option value="8.5x14">8.5 x 14</option>
                            <option value="9x12">9 x 12</option>
                            <option value="17x22">17 x 22</option>
                            <option value="11x25.5">11 x 25.5</option>
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
                        <label for="coating">Coating</label>
                        <select id="coating" class="form-control">
                            <option value="gloss-text">Gloss Text</option>
                        </select>
                    </div>

                    <!-- Folding Option -->
                    <div class="form-group">
                        <label for="fold">Folding Options</label>
                        <select id="fold" class="form-control">
                            <option value="half-fold">Half Fold</option>
                            <option value="tri-fold">Tri-Fold</option>
                            <option value="z-fold">Z-Fold</option>
                            <option value="roll-fold">Roll Fold</option>
                            <option value="double-parallel-fold">Double Parallel Fold</option>
                            <option value="8-page-fold">8 Page Fold</option>
                            <option value="4-panel-accordion-fold">4 Panel Accordion Fold</option>
                            <option value="double-gate-fold">Double Gate Fold</option>
                            <option value="gate-fold">Gate Fold</option>
                            <option value="score-and-half">Score And Half</option>
                            <option value="score-and-tri-fold">Socre And Tri Fold</option>
                            <option value="score-and-roll-fold">Score And Roll Fold</option>
                            <option value="score-and-z-fold">Score And Z Fold</option>
                            <option value="score-double-parallel-fold">Score And Double Parallel Fold</option>
                        </select>
                    </div>

                    <!-- Turnaround Time -->
                    <div class="form-group">
                        <label for="turnaround">Turnaround</label>
                        <select id="turnaround" class="form-control">
                            <option value="standard">Standard (4 Business Days)</option>
                        </select>
                    </div>

                    <!-- Price Display -->
                    <div class="product-price">
                        <h4>Regular Price:</h4>
                        <p>$42.00</p>
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
                    <h5>Product Details for Gloss Text Brochures</h5>
                    <p><strong>Paper Type:</strong> High-Quality Gloss Text</p>
                    <p><strong>Sizes:</strong> 8.5 x 11, 8.5 x 14, 9 x 12, 11 x 17, 17 x 22, 11 x 25.5</p>
                    <p><strong>Coating:</strong> Gloss Finish</p>
                    <p><strong>Folding Options:</strong> Half Fold, Tri-Fold, Z-Fold, Rolled Fold, 4 Panel Accordion Fold, 8 Page Fold, Double Parallel Fold, Gate Fold, Double Gate Fold, Z fold, Score and Half, Score and Roll, Score and Z Fold Score, Double Parallel Fold, Score and Tri Fold </p>
                    <p><strong>Quantities:</strong> 25 to 100,000</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep for Gloss Text Brochures</h5>
                    <p>Ensure your file meets the following requirements:</p>
                    <ul>
                        <li>Resolution: 300 DPI</li>
                        <li>Bleed: 1/8 inch on all sides</li>
                        <li>Color Mode: CMYK</li>
                        <li>File Format: PDF with bleeds</li>
                        <li>SPECIAL INSTRUCTIONS: We highly recommend selecting a fold type with scoring to help minimize cracking when folded Learn More

                            The size selected refers to the open size of the brochure. Folding will result in a smaller finished size.
                            
                            Art should match folding template as per instructions (i.e. fold, cut and bleed lines are to be followed). Failing to do so will result in delays and/or unexpected results.</li>
                    </ul>
                </div>

                <!-- Reviews Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <h5>Customer Reviews</h5>
                    <p>★★★★★ "Amazing print quality and great service!"</p>
                    <p>★★★★ "Fast delivery and professional finish."</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
