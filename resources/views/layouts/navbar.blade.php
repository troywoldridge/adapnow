<!-- Top bar with account links -->

<div class="top-bar">
    <div class="top-bar-right">
        <a href="/account" class="navbar-right-link">My Account</a>
        <a href="/cart" class="navbar-right-link">My Cart</a>
        <a href="/track-order" class="navbar-right-link">Track Order</a>
    </div>
</div>

<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo Section -->
        <div class="logo img">
            <a href="/"><img src="{{ asset('images/patriotic/american-design-and-printing-logo-1.webp') }}" alt="American Design and Printing" style="max-height: 50px;"></a>
        </div>
        <ul class="navbar-links">
            <!-- Business Cards Dropdown -->
            <li class="dropdown">
                <a href="#">Business Cards</a>
                <ul class="dropdown-content">
                    <li><a href="{{ route('business-cards') }}">Standard Business Cards</a>
                    <li><a href="#">Premium Cards</a></li>
                </ul>
            </li>

            <!-- Print Products Dropdown -->
            <li class="dropdown">
                <a href="#">Print Products</a>
                <ul class="dropdown-content">
                    <li><a href="#">Postcards</a></li>
                    <li><a href="#">Flyers</a></li>
                    <li><a href="#">Brochures</a></li>
                    <li><a href="#">Bookmark</a></li>
                    <li><a href="#">Presentation Folders</a></li>
                    <li><a href="#">Booklets</a></li>
                    <li><a href="#">Magnets</a></li>
                    <li><a href="#">Greeting Cards</a></li>
                    <li><a href="#">Invitations / Announcements</a></li>
                    <li><a href="#">Numbered Tickets</a></li>
                    <li><a href="#">Wall Calendars</a></li>
                    <li><a href="#">Variable Printing</a></li>
                    <li><a href="#">Posters</a></li>
                    <li><a href="#">Door Hangers</a></li>
                    <li><a href="#">Digital Sheets</a></li>
                    <li><a href="#">Folded Business Cards</a></li>
                    <li><a href="#">Tent Cards</a></li>
                    <li><a href="#">Plastics</a></li>
                    <li><a href="#">Tear Cards</a></li>
                    <li><a href="#">Clings</a></li>
                </ul>
            </li>

            <!-- Large Format Dropdown -->
            <li class="dropdown">
                <a href="#">Large Format</a>
                <ul class="dropdown-content">
                    <li><a href="#">Coroplast Signs</a></li>
                    <li><a href="#">Floor Graphics</a></li>
                    <li><a href="#">Foam Board</a></li>
                    <li><a href="#">Aluminum Signs</a></li>
                    <li><a href="#">Banners</a></li>
                    <li><a href="#">Pull Up Banners</a></li>
                    <li><a href="#">Car Magnets</a></li>
                    <li><a href="#">Table Covers</a></li>
                    <li><a href="#">Adhesive Vinyl</a></li>
                    <li><a href="#">Window Graphics</a></li>
                    <li><a href="#">Large Format Posters</a></li>
                    <li><a href="#">Styrene Signs</a></li>
                    <li><a href="#">Display Board</a></li>
                    <li><a href="#">Canvas</a></li>
                    <li><a href="#">Sintra / PVC</a></li>
                    <li><a href="#">X-Frame Banners</a></li>
                    <li><a href="#">A-Frame Signs</a></li>
                    <li><a href="#">Wall Decals</a></li>
                    <li><a href="#">A-Frame Stands</a></li>
                    <li><a href="#">H-Stands For Coroplast</a></li>
                </ul>
            </li>

            <!-- Stationary Dropdown -->
            <li class="dropdown">
                <a href="#">Stationary</a>
                <ul class="dropdown-content">
                    <li><a href="#">Letterhead</a></li>
                    <li><a href="#">Envelopes</a></li>
                    <li><a href="#">Notepads</a></li>
                    <li><a href="#">NCR Forms</a></li>
                    <li><a href="#">Supply Boxes</a></li>
                </ul>
            </li>

            <!-- Promotional Dropdown -->
            <li class="dropdown">
                <a href="#">Promotional</a>
                <ul class="dropdown-content">
                    <li><a href="#">Mugs</a></li>
                    <li><a href="#">Bottles</a></li>
                    <li><a href="#">Tumblers</a></li>
                    <li><a href="#">Mason Jars</a></li>
                    <li><a href="#">Keychains</a></li>
                    <li><a href="#">Coasters</a></li>
                    <li><a href="#">Mouse Pads</a></li>
                    <li><a href="#">Photo Panels</a></li>
                </ul>
            </li>

            <!-- Labels and Packaging Dropdown -->
            <li class="dropdown">
                <a href="#">Labels and Packaging</a>
                <ul class="dropdown-content">
                    <li><a href="#">Labels</a></li>
                    <li><a href="#">Product Boxes</a></li>
                    <li><a href="#">Corrugated Boxes</a></li>
                    <li><a href="#">Cut To Shape Decals</a></li>
                </ul>
            </li>

            <!-- Apparel Dropdown -->
            <li class="dropdown">
                <a href="#">Apparel</a>
                <ul class="dropdown-content">
                    <li><a href="#">Men's Apparel</a></li>
                    <li><a href="#">Women's Apparel</a></li>
                    <li><a href="#">Kids Apparel</a></li>
                    <li><a href="#">Headwear</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </li>

            <!-- Sample Kits Dropdown -->
            <li class="dropdown">
                <a href="#">Sample Kits</a>
                <ul class="dropdown-content">
                    <li><a href="#">American Design and Printing Stocks and Finishes</a></li>
                </ul>
            </li>

        <!-- Right-side (Search and Account links) -->
            <div class="navbar-right">
                <form action="/search" method="GET" class="search-form">
                     <input type="text" name="query" placeholder="Search...">
                     <button type="submit"><i class="fas fa-search"></i></button>
                 </form>
            </div>
        </div>
</nav>
