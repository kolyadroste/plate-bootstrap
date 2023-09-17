--
-- Table structure for table 'tt_content'
--
CREATE TABLE pages (
       slide_header varchar(64) DEFAULT '' NOT NULL,
       slide_post_content varchar(64) DEFAULT '' NOT NULL,
       slide_footer varchar(64) DEFAULT '' NOT NULL,
       slide_pre_footer varchar(64) DEFAULT '' NOT NULL,
       disable_header SMALLINT DEFAULT 0 NOT NULL,
       disable_post_content SMALLINT DEFAULT 0 NOT NULL,
       disable_post_content_subpages SMALLINT DEFAULT 0 NOT NULL,
       disable_pre_footer SMALLINT DEFAULT 0 NOT NULL,
       disable_footer SMALLINT DEFAULT 0 NOT NULL,
       plate_icon_fullcolor SMALLINT DEFAULT 0 NOT NULL,
);
CREATE TABLE tt_content (
      overlay SMALLINT DEFAULT 0 NOT NULL,
      frame_layout_inner_top varchar(64) DEFAULT '' NOT NULL,
      frame_layout_inner_bottom varchar(64) DEFAULT '' NOT NULL,
      header_style varchar(64) DEFAULT '' NOT NULL,
);