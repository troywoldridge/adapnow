@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Main Product Section -->
        <div class="col-md-8">
            <!-- Product Image and Description -->
            <div class="product-image">
                <img src="{{ asset('images/business-cards/14pt-matte-finish.jpg') }}" class="img-fluid" alt="14pt Matte Finish Business Cards">
            </div>
            <div class="product-description mt-3">
                <h2>Business Cards - 14pt Matte Finish</h2>
                <p>Make a great first impression with our premium business cards. Our 14pt matte finish cards offer a smooth, elegant look and feel. Ideal for businesses looking for high-end quality at an affordable price.</p>
            </div>
            <!-- Product Details Section -->
            <div class="product-details mt-4">
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="file-prep-tab" data-toggle="tab" href="#file-prep" role="tab" aria-controls="file-prep" aria-selected="false">File Prep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="productTabContent">
                    <!-- Details Tab -->
                    <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                        <ul class="list-unstyled">
                            <li><strong>Paper Type:</strong> 95 Bright 14pt C2S Stock</li>
                            <li><strong>Coating:</strong> Matte Finish</li>
                            <li><strong>Colors:</strong> Full color CMYK: 1 sided (4/0), or 2 sided (4/4)</li>
                            <li><strong>Quantities:</strong> Ranges from 100 to 25,000</li>
                            <li><strong>Sizes:</strong> 3.5" x 2" (standard)</li>
                            <li><strong>File Type:</strong> Print Ready PDF file</li>
                        </ul>
                    </div>
                    <!-- File Prep Tab -->
                    <div class="tab-pane fade" id="file-prep" role="tabpanel" aria-labelledby="file-prep-tab">
                        <p>Please ensure your design file meets the following requirements:</p>
                        <ul>
                            <li>Resolution: 300 DPI</li>
                            <li>Bleed Area: 0.125" on all sides</li>
                            <li>Accepted File Types: PDF, AI, PSD</li>
                        </ul>
                    </div>
                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <p>"Excellent quality and fast service. Highly recommend!" - John D.</p>
                        <p>"Great print and design options, will order again!" - Sarah L.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Selection and Price Section -->
        <div class="col-md-4">
            <div class="selection-box p-3 bg-light rounded">
                <h4 class="text-center">Price this item</h4>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <select class="form-control" id="stock" name="stock">
                            <option>14PT Printed 1 Side (4/0)</option>
                            <option>14PT Printed 2 Sides (4/4)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <select class="form-control" id="size" name="size">
                            <option>3.5 x 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <select class="form-control" id="quantity" name="quantity">
                            <option>100</option>
                            <option>250</option>
                            <option>500</option>
                            <option>1000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="coating">Coating</label>
                        <select class="form-control" id="coating" name="coating">
                            <option>Matte Finish</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="turnaround">Turnaround</label>
                        <select class="form-control" id="turnaround" name="turnaround">
                            <option>Next Business Day</option>
                            <option>3-5 Business Days</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sets">Sets</label>
                        <select class="form-control" id="sets" name="sets">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="price">
                        <h3 class="text-center">$8.67</h3>
                        <p class="text-center text-muted">No duties or taxes required.</p>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
