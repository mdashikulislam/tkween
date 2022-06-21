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
                    <h5 class="card-title">
                        Inprogress
                        Contracts</h5>
                </div>
                <div class="card-header" style="display:none">
                    <form method="get">
                        <div class="row">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-3">
                                <select name="status" class="form-control">
                                    <option hidden>Select Status</option>
                                    <option <?php if ($this->input->get('filter') == 'pending_payment'): ?> selected="selected"<?php endif ?>
                                            value="pending_payment">Pending for Payment
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'payment_not_completed'): ?> selected="selected"<?php endif ?>
                                            value="payment_not_completed">Payment Not Completed
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'payment_completed'): ?> selected="selected"<?php endif ?>
                                            value="payment_completed">Payment Completed
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'awaiting_books'): ?> selected="selected"<?php endif ?>
                                            value="awaiting_books">Awaiting Books
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'correction'): ?> selected="selected"<?php endif ?>
                                            value="correction">Correction
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'inner_design'): ?> selected="selected"<?php endif ?>
                                            value="inner_design">Inner Design
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'cover_design'): ?> selected="selected"<?php endif ?>
                                            value="cover_design">Cover Design
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'final_book'): ?> selected="selected"<?php endif ?>
                                            value="final_book">Final Book (v1)
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'printing_prototype'): ?> selected="selected"<?php endif ?>
                                            value="printing_prototype">Printing Prototype
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'ministry'): ?> selected="selected"<?php endif ?>
                                            value="ministry">Ministry
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'final_book2'): ?> selected="selected"<?php endif ?>
                                            value="final_book2">Final Book (v2)
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'published'): ?> selected="selected"<?php endif ?>
                                            value="published">Published
                                    </option>
                                    <option <?php if ($this->input->get('filter') == 'printing'): ?> selected="selected"<?php endif ?>
                                            value="printing">Printing
                                    </option>

                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select name="user" class="form-control">
                                    <option hidden>Contractors</option>

                                    <?php $user = $this->db->get('users')->result_array(); ?>
                                    <?php foreach ($user as $uu): ?>
                                        <option value="<?= $uu['id'] ?>"><?= $uu['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <input type="date" name="date" class="form-control"/>
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" name="filter" class="btn btn-primary" value="Search"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">


                    <div class="table-responsive">


                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr style="background:#f2f3f7">
                                <th width="7%">#</th>
                                <th>منشىء</th>
                                <th width="10%">المؤلف</th>
                                <th width="10%">إسم الكتاب</th>
                                <th>Dealing Person</th>
                                <th>Added Date</th>
                                <th>Processing Start</th>
                                <th>Publish Date</th>
                                <th>Duration</th>
                                <th>Status</th>


                                <th>تفاصيل</th>


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

                                        <?php $tagss = $this->db->where('id', $rr['tags'])->get('users')->result_array(); ?>
                                        <?php if (count($tagss)): ?>
                                            <?= $tagss[0]['name'] ?>
                                        <?php else: ?>
                                            ---
                                        <?php endif ?>


                                    </td>
                                    <td>
                                        <?php
                                        $date = date_create($rr['dt']);
                                        echo date_format($date, "d/m/Y");
                                        ?>
                                    </td>
                                    <td>
                                        <?php $date = date_create($rr['process_dt']);
                                        echo date_format($date, "d/m/Y"); ?>

                                    </td>
                                    <td>
                                        <?php if ($rr['publish_dt'] != ''): ?>
                                            <?php $date = date_create($rr['publish_dt']);
                                            echo date_format($date, "d/m/Y"); ?>
                                        <?php else: ?>
                                            ---

                                        <?php endif ?>

                                    </td>

                                    <td>
                                        <?php if ($rr['publish_dt'] != ''): ?>
                                            Days
                                            (<?php $date1 = new DateTime($rr['process_dt']);
                                            $date2 = new DateTime($rr['publish_dt']);
                                            echo $days = $date2->diff($date1)->format('%a');
                                            ?>)
                                        <?php else: ?>
                                            ---

                                        <?php endif ?>
                                    </td>


                                    <td>
                                       <span>

<?php
if ($rr['status'] == 2
    && $rr['payment_status'] == 0
    && $rr['author_sign'] == 0
    && $rr['correction_status'] == 0
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {
    echo 'Pending for Payment <br><small> Last Updated - ';
    $date = date_create($rr['up_dt']);
    echo date_format($date, "d/m/Y - h:i:s") . '</small>';
} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 0
    && $rr['correction_status'] == 0
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['ministry_step_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {
    echo 'Waiting for Book <br><small> Last Updated - ';
    $date = date_create($rr['up_dt']);
    echo date_format($date, "d/m/Y - h:i:s ") . '</small>';
} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 0
    && $rr['correction_status'] == 0
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {
    echo '<small>Payment not Complete</small><br>Waiting for Book  <br><small> Last Updated - ';
    $date = date_create($rr['up_dt']);
    echo date_format($date, "d/m/Y - h:i:s ") . '</small>';
} ///correction inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 0
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'Correction - ';
    if ($rr['correction_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['correction_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 0))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 0
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Correction - ';
    if ($rr['correction_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['correction_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small>  Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 0))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///correction pending
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 1
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'Correction - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 0))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 1
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Correction - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 0))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';
} ///correction rejected
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 3
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'Correction  Rejected - ';
    if ($rr['correction_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['correction_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 0))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 3
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Correction  Rejected - ';
    if ($rr['correction_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['correction_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 0))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///innerdesign inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'InnerDesign - ';
    if ($rr['inner_design_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['inner_design_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 2))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 0
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'InnerDesign - ';
    if ($rr['inner_design_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['inner_design_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 2))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///innerdesign pending
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 1
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'InnerDesign - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 2))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 1
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'InnerDesign - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 2))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';
} ///innerdesign rejected
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 3
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'InnerDesign  Rejected - ';
    if ($rr['inner_design_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['inner_design_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 2))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 3
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'InnerDesign  Rejected - ';
    if ($rr['inner_design_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['inner_design_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 2))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///coverdesign inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'CoverDesign - ';
    if ($rr['cover_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['cover_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 1))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 0
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'CoverDesign - ';
    if ($rr['cover_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['cover_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 1))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///coverdesign pending
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 1
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'CoverDesign - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 1))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 1
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'CoverDesign - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 1))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';
} ///coverdesign rejected
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 3
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'CoverDesign  Rejected - ';
    if ($rr['cover_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['cover_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 1))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 3
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'CoverDesign  Rejected - ';
    if ($rr['cover_task'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['cover_task'] == 1) {
        echo 'Inprocess';
    } else {
        echo 'Completed';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 1))->order_by('id', 'desc')->get('contract_processing')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///finalcopyv1 inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'FinalCopy(v1) - Waiting to Start ';

    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 0
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'FinalCopy(v1) - Waiting to Start ';

    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///finalcopyv1 pending
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 1
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['ministry_step_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'FinalCopy(v1) - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 1
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['ministry_step_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'FinalCopy(v1) - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';
} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 1
    && $rr['printing_prototype_status'] == 3
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'FinalCopy(v1) - ';
    echo 'Prototype Rejected - Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 1
    && $rr['printing_prototype_status'] == 3
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Prototype Rejected - FinalCopy(v1) - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';
} ///finalcopyv1 rejected
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 3
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'FinalCopy(v1) -  Rejected';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 3
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'FinalCopy(v1) - Rejected ';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 3))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///prototype inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'Printing Prototype  - Pending ';

    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 4))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 0
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Printing Prototype - Pending ';

    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 4))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///prototype  pending
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 1
    && $rr['ministry_status'] == 0
    && $rr['ministry_step_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'Printing Prototype - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 4))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 1
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Printing Prototype - ';
    echo 'Pending for Author';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 4))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';
} ///prototype  rejected
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 3
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'Printing Prototype -  Rejected';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 4))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 3
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Printing Prototype - Rejected ';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 4))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///ministry inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'Ministry - ';
    if ($rr['ministry_step_status'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['ministry_step_status'] == 1) {
        echo 'Pending';
    } elseif ($rr['ministry_step_status'] == 2) {
        echo 'Completed';
    } else {
        echo 'Rejected';
    }

    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 5))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 0
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Ministry - ';
    if ($rr['ministry_step_status'] == 0) {
        echo 'Waiting for Start';
    } elseif ($rr['ministry_step_status'] == 1) {
        echo 'Pending';
    } elseif ($rr['ministry_step_status'] == 2) {
        echo 'Completed';
    } else {
        echo 'Rejected';
    }
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 5))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///finalcopyv2 inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 2
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo 'FinalCopy(v2) -  Pending';

    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 6))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 2
    && $rr['final_book_status2'] == 0
    && $rr['publish_status'] == 0
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'FinalCopy(v2) -  Pending';
    echo '<br><small> Last Updated - ';
    $correction1 = $this->db->where(array('pid' => $rr['id'], 'type' => 6))->order_by('id', 'desc')->get('correction_log')->result_array();
    if (count($correction1)) {
        $date = date_create($correction1[0]['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    } else {
        $date = date_create($rr['up_dt']);
        echo date_format($date, "d/m/Y - h:i:s ");
    }
    echo '</small>';

} ///published inprocess
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 2
    && $rr['final_book_status2'] == 2
    && $rr['publish_status'] == 2
    && $rr['printing_status'] == 0) {

    echo 'Published';
    echo '<br><small> Last Updated - ';
    $date = date_create($rr['up_dt']);
    echo date_format($date, "d/m/Y - h:i:s ");
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 2
    && $rr['final_book_status2'] == 2
    && $rr['publish_status'] == 2
    && $rr['printing_status'] == 0) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Published';
    echo '<br><small> Last Updated - ';
    $date = date_create($rr['up_dt']);
    echo date_format($date, "d/m/Y - h:i:s ");
    echo '</small>';

} ///printing
elseif ($rr['status'] == 2
    && $rr['payment_status'] == 1
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 2
    && $rr['final_book_status2'] == 2
    && $rr['publish_status'] == 2
    && $rr['printing_status'] == 2) {

    echo 'Published  - Printing Start';
    echo '<br><small> Last Updated - ';
    $date = date_create($rr['up_dt']);
    echo date_format($date, "d/m/Y - h:i:s ");
    echo '</small>';

} elseif ($rr['status'] == 2
    && $rr['payment_status'] == 2
    && $rr['author_sign'] == 1
    && $rr['correction_status'] == 2
    && $rr['inner_design_st'] == 2
    && $rr['cover_status'] == 2
    && $rr['final_book_status'] == 2
    && $rr['printing_prototype_status'] == 2
    && $rr['ministry_status'] == 2
    && $rr['final_book_status2'] == 2
    && $rr['publish_status'] == 2
    && $rr['printing_status'] == 2) {

    echo '<small>Payment not Complete</small><br>';
    echo 'Published - Printing Start';
    echo '<br><small> Last Updated - ';
    $date = date_create($rr['up_dt']);
    echo date_format($date, "d/m/Y - h:i:s ");
    echo '</small>';

}


?>
                                                </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-secondary-rgba"
                                           href="<?= $this->load->config->base_url() ?>dashboard/contract_detail/processing/<?= $rr['id'] ?>">تفاصيل</a>


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