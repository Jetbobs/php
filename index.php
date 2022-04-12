<?php

$board = [
    [
    "idx" => 1,
    "title" => "제목만 보여주기!",
    "pe" => "아임웹",
    "datetime" => "2017-11-20",
    "likes" => 0
    ],
    [
        "idx" => 2,
        "title" => "제목만 보여주기!",
        "pe" => "아임웹",
        "datetime" => "2017-11-20",
        "likes" => 0
    ],
    [
        "idx" => 3,
        "title" => "제목만 보여주기!",
        "pe" => "아임웹",
        "datetime" => "2017-11-20",
        "likes" => 0
    ]
    ];

$forum = [
    [
        "idx" = > 1,
        "title" = > "제목만 보여주기!",
        "writer" = > "아임웹",
        "date" = > "2017-11-20",
        "likes" = > 0
    ],
    [
        "idx" = > 2,
        "title" = > "이번엔 가즈아아아아아아아!",
        "writer" = > "아임웹",
        "date" = > :"2017-11-20",
        "likes" = > 0
    ],
    [
        "idx" = > 3,
        "title" = > "응원합니다!",
        "writer" = > "아임웹",
        "date" = > "2017-11-20",
        "likes" = > 0
    ],
    [
        "idx" = > 4,
        "title" = > "탭 메뉴 이미지",
        "writer" = > "아임웹",
        "date" = > "2017-12-06",
        "likes" = > 0
    ],
    ,[
        "idx" = > 5,
        "title" = > "진짜로 갑니다~~",
        "writer" = > "아임웹",
        "date" = > "2018-04-17",
        "likes" = > 0
    ]
]
    foreach($board as $row){
?>
    <div><?php echo($row["title"]); ?></div>
    <div><?php echo($row["pe"]); ?></div>
    <div><?php echo($row["datetime"]); ?></div>
    <div><?php echo($row["likes"]); ?></div>
<?php
    }
?>

<?php
    $forum = [
        [
            "idx" = > 1,
            "title" = > "제목만 보여주기!",
            "writer" = > "아임웹",
            "date" = > "2017-11-20",
            "likes" = > 0
        ],
        [
            "idx" = > 2,
            "title" = > "이번엔 가즈아아아아아아아!",
            "writer" = > "아임웹",
            "date" = > :"2017-11-20",
            "likes" = > 0
        ],
        [
            "idx" = > 3,
            "title" = > "응원합니다!",
            "writer" = > "아임웹",
            "date" = > "2017-11-20",
            "likes" = > 0
        ],
        [
            "idx" = > 4,
            "title" = > "탭 메뉴 이미지",
            "writer" = > "아임웹",
            "date" = > "2017-12-06",
            "likes" = > 0
        ],
        ,[
            "idx" = > 5,
            "title" = > "진짜로 갑니다~~",
            "writer" = > "아임웹",
            "date" = > "2018-04-17",
            "likes" = > 0
        ]
    ]
    foreach($forum as $row1){
        ?>
            <table>
        <colgroup>
            <col width="5%">
            <col width="60%">
            <col width="10%">
            <col width="15%">
            <col width="10%">
        </colgroup>
        <thead>
            <th class="table_num">No</th>
            <th class="table_title">제목</th>
            <th class="table_writer">글쓴이</th>
            <th class="table_time">작성시간</th>
            <th class="table_likes">좋아요</th>
        </thead>
        <tbody>
            <tr>
                <td class="td_num"><?php echo($row1["idx"]);?></td>
                <td class="td_title"><?php echo($row1["title"]);?></td>
                <td class="td_writer"><?php echo($row1["writer"]);?></td>
                <td class="td_time"><?php echo($row1["date"]);?></td>
                <td class="td_likes"><?php echo($row1["likes"]);?></td>
            </tr>
            <tr>
                <td class="td_num"><?php echo($row1["idx"]);?></td>
                <td class="td_title"><?php echo($row1["title"]);?></td>
                <td class="td_writer"><?php echo($row1["writer"]);?></td>
                <td class="td_time"><?php echo($row1["date"]);?></td>
                <td class="td_likes"><?php echo($row1["likes"]);?></td>
            </tr>
            <tr>
                <td class="td_num"><?php echo($row1["idx"]);?></td>
                <td class="td_title"><?php echo($row1["title"]);?></td>
                <td class="td_writer"><?php echo($row1["writer"]);?></td>
                <td class="td_time"><?php echo($row1["date"]);?></td>
                <td class="td_likes"><?php echo($row1["likes"]);?></td>
            </tr>
            <tr>
                <td class="td_num"><?php echo($row1["idx"]);?></td>
                <td class="td_title"><?php echo($row1["title"]);?></td>
                <td class="td_writer"><?php echo($row1["writer"]);?></td>
                <td class="td_time"><?php echo($row1["date"]);?></td>
                <td class="td_likes"><?php echo($row1["likes"]);?></td>
            </tr>
            <tr>
                <td class="td_num"><?php echo($row1["idx"]);?></td>
                <td class="td_title"><?php echo($row1["title"]);?></td>
                <td class="td_writer"><?php echo($row1["writer"]);?></td>
                <td class="td_time"><?php echo($row1["date"]);?></td>
                <td class="td_likes"><?php echo($row1["likes"]);?></td>
            </tr>
        </tbody>
    </table>
        <?php
    }
?>