<!-- Start Breadcrumbbar -->
<div class="contentbar" style="margin-top:80px;">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->

        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="searchbar" style="    width: 600px; float:left">
                        <form method="get"
                              action="<?= $this->load->config->base_url() ?>dashboard/contracts/<?= $this->uri->segment(3) ?>">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit" id="button-addonSearch">
                                        <i class="fa fa-search"></i></button>
                                </div>
                                <?php
                                    if (!empty(@$years)):
                                ?>
                                <select class="form-control" name="year">
                                    <option value="">Select Year</option>
                                    <?php
                                        foreach($years as $year):
                                    ?>
                                            <option <?php echo $this->input->get('year') == $year['year'] ? 'selected':''?> value="<?php echo $year['year'];?>"><?php echo $year['year']?></option>
                                    <?php
                                        endforeach;
                                    ?>
                                </select>
                                <?php endif;?>
                                <select class="form-control" name="month">
                                    <option value="">اختر الشهر</option>
                                    <?php
                                    for($i =1; $i < 13;$i++):
                                        ?>
                                        <option <?php echo $this->input->get('month') == $i ? 'selected':''?> value="<?php echo $i;?>"><?php echo $i?></option>
                                    <?php
                                    endfor;
                                    ?>
                                </select>
                                <input type="search" value="<?= $this->input->get('search') ?>" name="search"
                                        class="form-control" placeholder="البحث في هذ القسم"
                                       aria-label="Search" aria-describedby="button-addonSearch">
                            </div>
                        </form>


                    </div>
                    <h5 class="card-title"> العقود
                        <?php if ($this->uri->segment(3) == 'new'): ?>
                            الجديدة
                        <?php elseif ($this->uri->segment(3) == 'pending'): ?>
                            المعلقة
                        <?php elseif ($this->uri->segment(3) == 'old'): ?>
                            القديمة
                        <?php endif ?>
                    </h5>


                </div>
                <div class="card-body">


                    <div class="table-responsive">


                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr style="background: linear-gradient(90deg, rgba(131,11,13,1) 0%, rgba(172,40,43,1) 100%); color:white">

                                <th>رقم العقد</th>
                                <th>منشىء العقد</th>
                                <th width="15%">المؤلف</th>
                                <th width="15%">إسم الكتاب</th>

                                <th>تاريخ الإنشاء</th>
                                <?php if ($this->uri->segment(3) == 'pending'): ?>
                                    <th>Process Date</th>
                                <?php endif ?>
                                <th>تاريخ آخر تحديث</th>
                                <?php if ($this->uri->segment(3) == 'pending'): ?>
                                    <th>ملاحظة</th>
                                <?php endif ?>
                                <th>تفاصيل</th>
                                <th>العقد</th>


                                <th>عمل</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($rec as $rr): ?>
                                <tr>

                                    <td>
                                        <?= $rr['cid'] ?>
                                    </td>

                                    <td>
                                        <?php $user = $this->db->where('id', $rr['admin_id'])->get('users')->result_array() ?>
                                        <?php if (count($user) == 0): ?>
                                            المؤلف
                                        <?php else: ?>
                                            <?= $user[0]['name'] ?>
                                        <?php endif ?>
                                    </td>

                                    <td>
                                        <?= $rr['name'] ?>
                                    </td>

                                    <td>
                                        <?= $rr['book_name'] ?>
                                    </td>

                                    <td>
                                        <?php $date = date_create($rr['dt']);
                                        echo date_format($date, "d/m/Y"); ?>

                                    </td>

                                    <?php if ($this->uri->segment(3) == 'pending'): ?>
                                        <td>
                                            <?php $date = date_create($rr['process_dt']);
                                            echo date_format($date, "d/m/Y"); ?>

                                        </td>
                                    <?php endif ?>


                                    <td>
                                        <?php
                                        $date = date_create($rr['up_dt']);
                                        echo date_format($date, "        d/m/Y ");
                                        ?>
                                    </td>
                                    </td>

                                    <?php if ($this->uri->segment(3) == 'pending'): ?>
                                        <td> <?= $rr['pending_note'] ?></td>
                                    <?php endif ?>
                                    <td>
                                        <a class="btn btn-secondary-rgba"
                                           href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/processing/<?= $rr['id'] ?>">تفاصيل</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-secondary-rgba" target="_blank"
                                           href="<?= $this->load->config->base_url() ?>dashboard/pcontract/<?= $rr['id'] ?>">معاينة</a>
                                    </td>
                                    <td>
                                        <?php if ($this->uri->segment(3) == 'new' || $this->uri->segment(3) == 'old_new'): ?>
                                            <a href="<?= $this->load->config->base_url() ?>dashboard/edit_contract/<?= $rr['id'] ?>/processing"
                                               class="btn btn-secondary-rgba">تعديل بيانات العقد</a>
                                            <a title="Edit PDF"
                                               href="<?= $this->load->config->base_url() ?>dashboard/edit_pdf/<?= $rr['id'] ?>/processing"
                                               class="btn btn-secondary-rgba">تعديل نص العقد</a>
                                        <?php endif ?>

                                        <?php if ($this->uri->segment(3) == 'pending'): ?>
                                            <a onclick="return confirm('Want to delete? This process is irreversible')"
                                               href="<?= $this->load->config->base_url() ?>dashboard/delete_contract/<?= $rr['id'] ?>/<?= $this->uri->segment(3) ?>"
                                               class="btn  btn-danger-rgba">Delete</a>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <br/>

                    <?php echo $this->pagination->create_links() ?>

                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>