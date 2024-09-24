@extends('layouts.main')

@section('content')
<div class="container product-page my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ asset('images/all-images/14pt-matte-finish-greeting-cards.jpg') }}" class="img-fluid" alt="14pt Matte Finish Greeting Card">
        </div>

        <!-- Product Details and Order Form -->
        <div class="col-md-5">
            <h1>Greeting Cards</h1>
            <h2>14pt + Matte Finish</h2>
            <p>Help your clients express gratitude and delight with greeting cards that feature a smooth, elegant matte finish. These greeting cards are perfect for various occasions such as holidays and customer appreciation.</p>

            <!-- Product Order Box -->
            <form>
                <!-- Stock Dropdown -->
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <select id="stock" class="form-control">
                        <option value="14pt-printed-1-side">14PT Printed 1 Side (4/0)</option>
                        <option value="14pt-printed-2-side">14PT Printed 2 Sides (4/4)</option>
                    </select>
                </div>

                <!-- Size Dropdown -->
                <div class="form-group">
                    <label for="size">Size</label>
                    <select id="size" class="form-control">
                        <option value="10x7">10 x 7</option>
                        <option value="8.5x11">8.5 x 11</option>
                        <option value="8.5x5.5">8.5 x 5.5</option>
                    </select>
                </div>

                <!-- Custom Size Checkbox -->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customSize">
                    <label class="form-check-label" for="customSize">Need a custom size?</label>
                </div>

                <!-- Quantity Dropdown -->
                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <select id="qty" class="form-control">
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                        <option value="250">250</option>
                        <option value="500">500</option>
                    </select>
                </div>

                <!-- Coating Dropdown -->
                <div class="form-group">
                    <label for="coating">Coating</label>
                    <select id="coating" class="form-control">
                        <option value="matte-finish">Matte Finish</option>
                    </select>
                </div>

                <!-- Folding Sample -->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="foldingSample">
                    <label class="form-check-label" for="foldingSample">Do you have a folding sample?</label>
                </div>

                <!-- Bindery Dropdown -->
                <div class="form-group">
                    <label for="bindery">Bindery</label>
                    <select id="bindery" class="form-control">
                        <option value="score">Score</option>
                    </select>
                </div>

                <!-- Envelopes Dropdown -->
                <div class="form-group">
                    <label for="envelopes">Include Envelopes</label>
                    <select id="envelopes" class="form-control">
                        <option value="no">NO</option>
                        <option value="yes">YES</option>
                    </select>
                </div>

                <!-- Turnaround Time -->
                <div class="form-group">
                    <label for="turnaround">Turnaround</label>
                    <select id="turnaround" class="form-control">
                        <option value="4-5-business-days">4 - 5 Business Days</option>
                    </select>
                </div>

                <!-- Pricing Details -->
                <div class="product-price">
                    <h4>Regular Price:</h4>
                    <p><del>$32.68</del></p>
                    <h4>Special Price:</h4>
                    <p>$29.41</p>
                </div>

                <!-- Add to Cart Button -->
                <button type="button" class="btn btn-primary">Add to Cart</button>
            </form>
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
                    <h5>Product Details for 14pt + Matte Finish Greeting Cards</h5>
                    <p><strong>Paper Type:</strong> 95 Bright 14pt Gloss C2S</p>
                    <p><strong>Coating:</strong> Matte Finish</p>
                    <p><strong>Color:</strong> Full color CMYK: 1 sided (4/0), or 2 sided (4/4)</p>
                    <p><strong>Quantities:</strong> Ranges from 10 to 500</p>
                    <p><strong>Sizes:</strong> 10" x 7" / 8.5" x 11" / 8.5" x 5.5"</p>
                    <p><strong>Finishing:</strong> Cut to size, score, and box. Envelopes are optional.</p>
                </div>

                <!-- File Prep Tab -->
                <div class="tab-pane fade" id="fileprep" role="tabpanel">
                    <h5>File Prep For 14pt + Matte Finish Greeting Cards</h5>
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
                    <p>★★★★★ "Fantastic quality and great price!"</p>
                    <p>★★★★ "Love the matte finish, very premium."</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Envelope Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h4>Envelope Sizes</h4>
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('images/all-images/14pt-matte-finish-greeting-cards-3.png') }}" class="img-fluid" alt="8.5x11 Envelope">
                    <p>8.75" x 11.25" Envelopes</p>
                </div>
                <div class="col-md-7">
                    <img src="{{ asset('images/all-images/14pt-matte-finish-greeting-cards-2.jpg') }}" class="img-fluid" alt="8.5x5.5 Envelope">
                    <p>8.75" x 5.75" Envelopes</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/all-images/14pt-matte-finish-greeting-cards-4.jpg') }}" class="img-fluid" alt="5x7 Envelope">
                    <p>5.25" x 7.25" Envelopes</p>
                </div>
                

            </div>
        </div>
    </div>
</div>
@endsection
