<?php include "header.php" ?>
<style>
    header.main-header .header-sticky {
    padding: 15px 0;
    background: #222222;
    border: none;
    }
</style>

<div class="allSpecialistsPage">
    <div class="container">
        <!-- Page Header -->
        <div class="specialistsPageHeader text-center">
            <h1>Find Your Perfect Specialist</h1>
            <p>Browse our talented professionals by category</p>
        </div>

        <div class="row">
            <!-- Category Filter Sidebar -->
            <div class="col-lg-3 col-md-4">
                <div class="categoryFilterSidebar">
                    <h3>Categories</h3>
                    <ul class="categoryFilterList">
                        <li>
                            <a href="#" class="category-filter active" data-category="all">
                                <iconify-icon icon="mdi:grid"></iconify-icon>
                                All Specialists
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="hair-salon">
                                <img src="images/new-images/woman-hair.png" alt="Hair Salon">
                                Hair Salon
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="barbershop">
                                <img src="images/new-images/stylist.png" alt="Barbershop">
                                Barbershop
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="nail-salon">
                                <img src="images/new-images/nail-polish.png" alt="Nail Salon">
                                Nail Salon
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="skin-care">
                                <img src="images/new-images/skincare.png" alt="Skin Care">
                                Skin Care
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="brows-lashes">
                                <img src="images/new-images/tinting.png" alt="Brows & Lashes">
                                Brows & Lashes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="massage">
                                <img src="images/new-images/facial-massage.png" alt="Massage">
                                Massage
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="makeup">
                                <img src="images/new-images/makeover.png" alt="Makeup">
                                Makeup
                            </a>
                        </li>
                        <li>
                            <a href="#" class="category-filter" data-category="wellness">
                                <img src="images/new-images/lotus.png" alt="Wellness & Day Spa">
                                Wellness & Day Spa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Specialists Grid -->
            <div class="col-lg-9 col-md-8">
                <div class="specialistsGridSection">
                    <div class="row gy-4" id="specialistsGrid">

                        <!-- Specialist Card 1 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="hair-salon">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/post-1.jpg" alt="Jordan Nunez">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Hair Salon</span>
                                        <h5>Jordan Nunez</h5>
                                    </div>
                                    <div class="address">
                                        <span title="676 Larkfield Ctr, Santa Rosa CA, 95403">676 Larkfield Ctr, Santa Rosa CA, 95403</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 2 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="barbershop">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/post-2.jpg" alt="Alex Rivera">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Barbershop</span>
                                        <h5>Alex Rivera</h5>
                                    </div>
                                    <div class="address">
                                        <span title="1020 Mendocino Ave, Santa Rosa CA, 95401">1020 Mendocino Ave, Santa Rosa CA, 95401</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 3 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="nail-salon">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/fab3bb1c53.jpg" alt="Maria Lopez">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Nail Salon</span>
                                        <h5>Maria Lopez</h5>
                                    </div>
                                    <div class="address">
                                        <span title="342 College Ave, Santa Rosa CA, 95404">342 College Ave, Santa Rosa CA, 95404</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 4 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="skin-care">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/post-4.jpg" alt="Samuel Patel">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Skin Care</span>
                                        <h5>Samuel Patel</h5>
                                    </div>
                                    <div class="address">
                                        <span title="1250 Sonoma Ave, Santa Rosa CA, 95405">1250 Sonoma Ave, Santa Rosa CA, 95405</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 5 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="brows-lashes">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/post-5.jpg" alt="Diego Martinez">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Brows & Lashes</span>
                                        <h5>Diego Martinez</h5>
                                    </div>
                                    <div class="address">
                                        <span title="89 Sebastopol Rd, Santa Rosa CA, 95407">89 Sebastopol Rd, Santa Rosa CA, 95407</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 6 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="massage">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/9b61d40ffb.jpg" alt="Chris Johnson">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Massage</span>
                                        <h5>Chris Johnson</h5>
                                    </div>
                                    <div class="address">
                                        <span title="2020 Cleveland Ave, Santa Rosa CA, 95401">2020 Cleveland Ave, Santa Rosa CA, 95401</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 7 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="makeup">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/photo-4.jpg" alt="Anthony Davis">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Makeup</span>
                                        <h5>Anthony Davis</h5>
                                    </div>
                                    <div class="address">
                                        <span title="500 W College Ave, Santa Rosa CA, 95401">500 W College Ave, Santa Rosa CA, 95401</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 8 -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="wellness">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/2f29d2b3cc.jpg" alt="Sophia Taylor">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Wellness & Day Spa</span>
                                        <h5>Sophia Taylor</h5>
                                    </div>
                                    <div class="address">
                                        <span title="2100 Fourth St, Santa Rosa CA, 95404">2100 Fourth St, Santa Rosa CA, 95404</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specialist Card 9 - Additional Hair Salon -->
                        <div class="col-lg-4 col-md-6 col-sm-12 specialist-card" data-category="hair-salon">
                            <div class="profile-card">
                                <div class="profile-img">
                                    <img src="images/post-3.jpg" alt="Emma Wilson">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="name-row">
                                        <span class="promoted">Hair Salon</span>
                                        <h5>Emma Wilson</h5>
                                    </div>
                                    <div class="address">
                                        <span title="789 Broadway, Santa Rosa CA, 95401">789 Broadway, Santa Rosa CA, 95401</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="socialMedia">
                                            <a href="#"><iconify-icon icon="iconoir:instagram"></iconify-icon></a>
                                            <a href="#"><iconify-icon icon="ic:sharp-whatsapp"></iconify-icon></a>
                                        </div>
                                        <a href="specialist-profile.php" class="viewProfileBtn"><iconify-icon icon="guidance:up-right-arrow"></iconify-icon></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- No Results Message (Hidden by default) -->
                    <div class="noResults" id="noResults" style="display: none;">
                        <iconify-icon icon="mdi:magnify"></iconify-icon>
                        <h3>No specialists found</h3>
                        <p>Try selecting a different category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterLinks = document.querySelectorAll('.category-filter');
    const specialistCards = document.querySelectorAll('.specialist-card');
    const noResults = document.getElementById('noResults');

    filterLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            filterLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            const category = this.getAttribute('data-category');
            let visibleCount = 0;

            specialistCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (visibleCount === 0) {
                noResults.style.display = 'block';
            } else {
                noResults.style.display = 'none';
            }
        });
    });
});
</script>
