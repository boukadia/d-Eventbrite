<div class="card radius-10">
    <!-- <h6 class="mb-0 text-uppercase">Input Mask</h6> -->
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-between align-items-center">
                <div>
                    <h5 class="my-4 text-xl">La liste des Evenementes</h5>
                </div>

                <div class="d-flex order-actions pb-2 cursor-pointer" id="addBtn">
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
                    <tbody>
                        <?php foreach ($events as $key => $value) { ?>
                            <tr>                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="recent-product-img">
                                            <img src="assets/images/icons/chair.png" alt="">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14"><?= $value['title'] ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $value['location'] ?></td>
                                <td>
                                    <div class="d-flex align-items-center text-white"> <i
                                            class='me-1 font-18 align-middle bx-rotate-90 bx bx-burst bx-radio-circle-marked'></i>
                                        <span><?= $value['status'] ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex order-actions"> <a href="javascript:;" class=""><i
                                                class="bx bx-cog"></i></a>
                                        <a href="javascript:;" class="ms-4"><i class='bx bxs-message-square-minus'></i></a>
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

<div class="left-[50%] position-absolute translate-[-50%] card" id="addPopup">
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <input type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Date time:</label>
                <input type="datetime-local" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" class="form-control" value="........">
            </div>
            <div class="mb-3">
                <label class="form-label">Input File:</label>
                <input type="file" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Month:</label>
                <input type="month" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Search:</label>
                <input type="search" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tel:</label>
                <input type="tel" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Time:</label>
                <input type="time" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Url:</label>
                <input type="url" class="form-control" placeholder="https://example.com/users/">
            </div>
            <div class="mb-3">
                <label class="form-label">Week:</label>
                <input type="week" class="form-control">
            </div>
        </form>
    </div>
</div>
<script>
    // console.log("tettttttttttttttt");
    
    const addBtn = document.getElementById("addBtn");
    const addPopup = document.getElementById("addPopup");
    
    addBtn.addEventListener("click", openPopup());
    
    function openPopup() {
        addPopup.classList.toggle("open");
        console.log("tesssst");
    }
</script>