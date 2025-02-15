<div class="card radius-10">
    <!-- <h6 class="mb-0 text-uppercase">Input Mask</h6> -->
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-between align-items-center">
                <div>
                    <h5 class="my-4 text-xl">La liste des Evenementes</h5>
                </div>

                <div class="right-[0.7rem] bottom-[4.2rem] fixed d-flex order-actions bg-white/25 p-2 px-4 pb-2 rounded-xl cursor-pointer" id="toggleBtn">
                    <i class='text-3xl bx bx-message-square-add'></i>
                </div>
            </div>
            <hr />
            <div class="table-responsive">
                <table class="table mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Ev_id</th>
                            <th>Evenementes</th>
                            <th>location</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="bodyTableEvents">
                        <?php foreach ($events as $key => $value) { ?>
                            <tr data-id="<?= $value['id'] ?>">
                                <td class="id-cell"><?= $value['id'] ?></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="assets/images/icons/chair.png" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14 title-cell"><?= $value['title'] ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="location-cell"><?= $value['location'] ?></td>
                                <td>
                                    <div class="d-flex align-items-center text-white">
                                        <i
                                            class="me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked"></i>
                                        <span class="status-cell"><?= $value['status'] ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a onclick="handleEdite(<?= $value['id'] ?>)" href="javascript:;" class=""><i class="bx bx-cog"></i></a>
                                        <a onclick="handleDelete(<?= $value['id'] ?>)" href="javascript:;" class="ms-4"><i class="bx bxs-message-square-minus"></i></a>
                                    </div>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="hidden top-[50%] left-[50%] z-10 position-fixed bg-gray-700 w-[60%] -translate-x-1/2 -translate-y-1/2 transform card"
    style="" id="addPopup">
    <div class="p-[1.5rem] card-body">
        <form id="eventForm">
            <div class="row">
                <div class="mb-2 col-md-4">
                    <label class="form-label">Titre:</label>
                    <input type="text" id="title" class="form-control">
                </div>
                <div class="mb-2 col-md-4">
                    <label class="form-label">Location :</label>
                    <select id="selectLocation" class="form-select mb-2 col-md-6" aria-label="Default select example">
                        <option selected>Choisie location</option>
                    </select>
                </div>
                <div class="mb-2 col-md-4">
                    <label class="form-label">Category :</label>
                    <select id="selectCategories" class="form-select mb-2 col-md-6" aria-label="Default select example">
                        <option selected>Choisie category</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-2 col-md-6">
                    <label class="form-label">Date:</label>
                    <input type="date" id="date" class="form-control">
                </div>
                <div class="mb-2 col-md-6">
                    <label class="form-label">Price:</label>
                    <input type="text" id="price" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-2 col-md-6">
                    <label class="form-label">heure de début :</label>
                    <input type="time" id="start_time" class="form-control">
                </div>
                <div class="mb-2 col-md-6">
                    <label class="form-label">heure de fin :</label>
                    <input type="time" id="end_time" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="mb-2 col-md-12">
                    <label class="form-label">Image :</label>
                    <input type="file" id="image" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control mt-2" id="description" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
            <div class="justify-between row">
                <div class="mt-4 mb-2 col-3 col-md-5">
                    <button type="button" id="submit" class="px-5 btn btn-light">Ajouter</button>
                </div>
                <div class="mt-4 mb-2 col-3 col-md-5">
                    <button type="button" onclick="cancelPopup()" class="px-5 btn btn-light">annuler</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../../../../../public/assetsOrg/js/organisateur.js"></script>