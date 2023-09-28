<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="Secretaria" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; }
      /* .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black } */
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      /* .inlineStr { text-align:left } */
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style5 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style5 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style6 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style6 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style7 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style7 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style8 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style8 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style9 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style9 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style10 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style10 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style11 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style11 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style12 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style12 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style15 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style15 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style17 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style17 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style18 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style18 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style19 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style19 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style20 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style20 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style21 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style21 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style22 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style22 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style23 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style23 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style26 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style26 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style27 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style27 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style28 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style28 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style29 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style29 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style30 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style30 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style31 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style31 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style32 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style32 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style33 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style33 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style34 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style34 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style35 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style35 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style36 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style36 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style37 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style37 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style38 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style38 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style39 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style39 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style40 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style40 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style41 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style41 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style42 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style42 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style43 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style43 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style44 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style44 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style45 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style45 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style46 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style46 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style47 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style47 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style48 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style48 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style49 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style49 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style50 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style50 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style51 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style51 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style52 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style52 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style53 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style53 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style54 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style54 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style55 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style55 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style56 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style56 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style57 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style57 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style58 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style58 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style59 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style59 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style60 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style60 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style61 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style61 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style62 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style62 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style63 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style63 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style64 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style64 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style65 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style65 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style66 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style66 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style69 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style69 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style70 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style70 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style71 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style71 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style72 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style72 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style73 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style73 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style74 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style74 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style75 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style75 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style76 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style76 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style77 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style77 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style78 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style78 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style79 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style79 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style80 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style80 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style81 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style81 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style82 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style82 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style83 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style83 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style84 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style84 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style85 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style85 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style86 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style86 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style87 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style87 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style88 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style88 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style89 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style89 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style90 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style90 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style91 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style91 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style92 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style92 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style93 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style93 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style94 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style94 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style95 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style95 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style96 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style96 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style97 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style97 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style98 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style98 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style99 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style99 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style100 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style100 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style101 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style101 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style102 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style102 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style103 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style103 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style104 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style104 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style105 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style105 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style106 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style106 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; text-decoration:underline; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style107 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style107 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style108 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style108 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style109 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style109 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style110 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style110 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style111 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style111 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style112 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style112 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style113 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style113 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style114 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style114 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style115 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style115 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style116 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style116 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style117 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style117 { vertical-align:bottom; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style118 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style118 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style119 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style119 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style120 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style120 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style121 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style121 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style122 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style122 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style123 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style123 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style124 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style124 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style125 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style125 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style126 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style126 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style127 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style127 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style128 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style128 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style129 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style129 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style130 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style130 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style131 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style131 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style132 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style132 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style133 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style133 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style134 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style134 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style135 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style135 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style136 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style136 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style137 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style137 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style138 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style138 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style139 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style139 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style140 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style140 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style141 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style141 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      table.sheet0 col.col0 { width:10.84444432pt }
      table.sheet0 col.col1 { width:96.24444334pt }
      table.sheet0 col.col2 { width:21.68888864pt }
      table.sheet0 col.col3 { width:71.16666585pt }
      table.sheet0 col.col4 { width:10.84444432pt }
      table.sheet0 col.col5 { width:10.16666655pt }
      table.sheet0 col.col6 { width:65.74444369pt }
      table.sheet0 col.col7 { width:17.62222202pt }
      table.sheet0 col.col8 { width:38.63333289pt }
      table.sheet0 col.col9 { width:50.15555498pt }
      table.sheet0 col.col10 { width:10.84444432pt }
      table.sheet0 col.col11 { width:51.51111052pt }
      table.sheet0 col.col12 { width:42pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row1 { height:16pt }
      table.sheet0 tr.row5 { height:16pt }
      table.sheet0 tr.row12 { height:9pt }
      table.sheet0 tr.row13 { height:16pt }
      table.sheet0 tr.row26 { height:16pt }
      table.sheet0 tr.row27 { height:16pt }
      table.sheet0 tr.row29 { height:16pt }
      table.sheet0 tr.row30 { height:16pt }
      table.sheet0 tr.row33 { height:38pt }
      table.sheet0 tr.row34 { height:58pt }
      table.sheet0 tr.row35 { height:58pt }
      table.sheet0 tr.row36 { height:58pt }
      table.sheet0 tr.row37 { height:22pt }
      table.sheet0 tr.row38 { height:20pt }
      table.sheet0 tr.row39 { height:31pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.75in; margin-bottom: 0.75in; }
body { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.75in; margin-bottom: 0.75in; }
</style>

{{-- {{$usuario}} --}}
{{-- {{$total_imponible = ($horas_extras*$usuario->valor_hora_ex) + ( $sueldodiv30*$dias_trabajados)}} --}}

    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <tbody>
          <tr class="row0">
            <td class="column0 style94 s style99" colspan="11" rowspan="2">LIQUIDACIÓN DE REMUNERACIONES MES DE AGOSTO 2023</td>
            <td class="column11"></td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row1">
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row2">
            <td class="column0 style1 null"></td>
            <td class="column1 style44 null"></td>
            <td class="column2 style44 null"></td>
            <td class="column3 style44 null"></td>
            <td class="column4 style44 null"></td>
            <td class="column5 style44 null"></td>
            <td class="column6 style44 null"></td>
            <td class="column7 style44 null"></td>
            <td class="column8 style44 null"></td>
            <td class="column9 style44 null"></td>
            <td class="column10 style45 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row3">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 s">EMPLEADOR:</td>
            <td class="column2 style39 s style39" colspan="8">FUNDACIÓN CASA ESPERANZA e.v.</td>
            <td class="column10 style55 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row4">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 s">RUT</td>
            <td class="column2 style39 s style39" colspan="8">65.204.130-2</td>
            <td class="column10 style55 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row5">
            <td class="column0 style101 null"></td>
            <td class="column1 style50 null"></td>
            <td class="column2 style51 null"></td>
            <td class="column3 style51 null"></td>
            <td class="column4 style51 null"></td>
            <td class="column5 style51 null"></td>
            <td class="column6 style51 null"></td>
            <td class="column7 style51 null"></td>
            <td class="column8 style51 null"></td>
            <td class="column9 style51 null"></td>
            <td class="column10 style102 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row6">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 s">TRABAJADOR:</td>
	
			<td class="column2 style83 s style83" colspan="3">{{$usuario->name}} </td>
			<td class="column5 style28 null"></td>
            <td class="column6 style36 s">RUT</td>
            <td class="column7 style36 null"></td>
            <td class="column8 style83 s style83" colspan="2">{{ $usuario->rut}}</td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row7">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 null"></td>
            <td class="column2 style39 s style39" colspan="3">{{$usuario->lastname}}</td>
            <td class="column5 style28 null"></td>
            <td class="column6 style36 null"></td>
            <td class="column7 style36 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style28 null"></td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row8">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 s">SUELDO BASE:</td>
            <td class="column2 style29 null"></td>
            {{-- <td class="column3 style29 n">$ {{ $usuario->sueldo_base}}</td> --}}
            <td class="column3 style29 n">$ {{ $sueldoformat}}</td>
            <td class="column4 style103 null"></td>
            <td class="column5 style103 null"></td>
            <td class="column6 style124 s">CARGO</td>
            <td class="column7 style39 s style39" colspan="3">{{ $usuario->cargo}}</td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row9">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">TIPO CONTRATO :</td>
            <td class="column2 style104 null"></td>
            <td class="column3 style104 s">{{ $usuario->tipo_contrato}}</td>
            <td class="column4 style28 null"></td>
            <td class="column5 style28 null"></td>
            <td class="column6 style36 s">A.F.P.</td>
            <td class="column7 style39 s style39" colspan="3">{{ $usuario->afp}}</td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">FECHA CONTRATO</td>
            <td class="column2 style105 null"></td>
            <td class="column3 style105 n">{{ $usuario->fecha_contrato}} </td>
            <td class="column4 style28 null"></td>
            <td class="column5 style28 null"></td>
            <td class="column6 style36 s">ISAP/FONASA</td>
            <td class="column7 style39 s style39" colspan="3">{{ $usuario->salud}}</td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row11">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 s">VALOR H/EX</td>
            <td class="column2 style28 null"></td>
            {{-- <td class="column3 style28 n">$ {{ $usuario->valor_hora_ex}}</td> --}}
            <td class="column3 style28 n">$ {{ $horaexformat}}</td>
            <td class="column4 style28 null"></td>
            <td class="column5 style28 null"></td>
            <td class="column6 style28 null"></td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style28 null"></td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row12">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 null"></td>
            <td class="column2 style28 null"></td>
            <td class="column3 style28 null"></td>
            <td class="column4 style28 null"></td>
            <td class="column5 style28 null"></td>
            <td class="column6 style28 null"></td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style28 null"></td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row13">
            <td class="column0 style32 s style34" colspan="5">HABERES</td>
            <td class="column5 style33 s style34" colspan="6">DESCUENTOS</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row14">
            <td class="column0 style100 null"></td>
            <td class="column1 style106 s">IMPONIBLE</td>
            <td class="column2 style28 null"></td>
            <td class="column3 style28 null"></td>
            <td class="column4 style3 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style28 null"></td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style28 null"></td>
            <td class="column10 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row15">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">SUELDO BASE</td>
            <td class="column2 style28 n">{{$dias_trabajados}}</td>
            <td class="column3 style29 f">$  {{ number_format($sueldodiv30*$dias_trabajados)}} </td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style39 s style39" colspan="2">DESC. PREVISION</td>
            <td class="column8 style109 n">{{$usuario->valor_afp}}%</td>
		{{--  --}}
            {{-- <td class="column9 style29 f">$ {{ $usuario->valor_afp * $total_imponible }}</td> --}}
            <td class="column9 style29 f">$ {{  $descuento_afp  }}</td>

		{{--  --}}
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row16">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">HORAS TRABAJADAS</td>
            <td class="column2 style28 n">{{ $horas_trabajadas}}</td>
            <td class="column3 style29 null"></td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style39 s style39" colspan="2">DESC. SALUD</td>
            <td class="column8 style110 n">{{$usuario->valor_salud}}%</td>
            <td class="column9 style29 f">$ {{$descuento_salud}}</td>
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row17">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">HORAS EXTRAS</td>
            <td class="column2 style28 n">{{ $horas_extras }}</td>
            <td class="column3 style29 f">$ {{ $total_horas_extras }}</td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style39 s style39" colspan="2">CAJA LOS ANDES</td>
            <td class="column8 style110 n">{{$usuario->valor_caja_comp}}%</td>
            <td class="column9 style29 f">${{$descuento_caja}} </td>
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row18">
            <td class="column0 style100 null"></td>
            <td class="column1 style106 s">TOTAL IMPONIBLE</td>
            <td class="column2 style28 null"></td>
            <td class="column3 style48 f">$ {{ number_format($total_imponible)  }}</td>
            <td class="column4 style63 null"></td>
            <td class="column5 style64 null"></td>
            <td class="column6 style39 s style39" colspan="2">PRESTAMO CLA</td>
            <td class="column8 style111 s">(25/37)</td>
            <td class="column9 style29 n">$ 61,507</td>
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row19">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 null"></td>
            <td class="column2 style36 null"></td>
            <td class="column3 style29 null"></td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style28 s">SEG CESANTÍA</td>
            <td class="column7 style28 null"></td>
            <td class="column8 style110 n">{{ $usuario->seguro_cesantia }}%</td>
            <td class="column9 style112 f">$ {{$seguro_cesantia }}</td>
            <td class="column10 style113 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row20">
            <td class="column0 style100 null"></td>
            <td class="column1 style106 s">NO IMPONIBLE</td>
            <td class="column2 style28 null"></td>
            <td class="column3 style29 null"></td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style28 s">ANTICIPOS</td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style112 f">$ {{$anticipos }}</td>
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row21">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">ASIG. FAMILIAR</td>
            <td class="column2 style28 n">1</td>
            <td class="column3 style29 n">$ 12,475</td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style114 null"></td>
            <td class="column7 style114 null"></td>
            <td class="column8 style114 null"></td>
            <td class="column9 style114 null"></td>
            <td class="column10 style115 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row22">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 null"></td>
            <td class="column2 style28 null"></td>
            <td class="column3 style29 null"></td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style114 null"></td>
            <td class="column7 style114 null"></td>
            <td class="column8 style114 null"></td>
            <td class="column9 style114 null"></td>
            <td class="column10 style115 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row23">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">LOCOMOCION</td>
            <td class="column2 style36 n">30</td>
            <td class="column3 style29 f">$ 70,000</td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style114 null"></td>
            <td class="column7 style114 null"></td>
            <td class="column8 style114 null"></td>
            <td class="column9 style114 null"></td>
            <td class="column10 style115 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row24">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 s">AGUINALDO+BONOS</td>
            <td class="column2 style28 null"></td>
            <td class="column3 style29 null"></td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style28 null"></td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style29 null"></td>
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12 style87 s"></td>
          </tr>
          <tr class="row25">
            <td class="column0 style100 null"></td>
            <td class="column1 style106 s">TOTAL NO IMPONIBLE</td>
            <td class="column2 style36 null"></td>
            <td class="column3 style48 f">$ 82,475</td>
            <td class="column4 style63 null"></td>
            <td class="column5 style64 null"></td>
            <td class="column6 style28 null"></td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style29 null"></td>
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row26">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 null"></td>
            <td class="column2 style28 null"></td>
            <td class="column3 style29 null"></td>
            <td class="column4 style107 null"></td>
            <td class="column5 style108 null"></td>
            <td class="column6 style28 null"></td>
            <td class="column7 style28 null"></td>
            <td class="column8 style28 null"></td>
            <td class="column9 style29 null"></td>
            <td class="column10 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row27">
            <td class="column0 style56 s style57" colspan="2">TOTAL HABERES</td>
            <td class="column2 style60 f style60" colspan="2">$ 812,475</td>
            <td class="column4 style61 null"></td>
            <td class="column5 style32 s style33" colspan="2">TOTAL DESC.</td>
            <td class="column7 style58 null"></td>
            <td class="column8 style59 f style59" colspan="2">$ 200,499</td>
            <td class="column10 style35 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row28">
            <td class="column0 style116 null"></td>
            <td class="column1 style14 null"></td>
            <td class="column2 style15 null"></td>
            <td class="column3 style117 null"></td>
            <td class="column4 style61 null"></td>
            <td class="column5 style118 s style123" colspan="6" rowspan="6">SON : SEISCIENTOS ONCE  MIL, NOVECIENTOS SETENTA Y SEIS PESOS.-</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row29">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 null"></td>
            <td class="column2 style28 null"></td>
            <td class="column3 style29 null"></td>
            <td class="column4 style107 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row30">
            <td class="column0 style32 s style33" colspan="2">LIQUIDO A RECIBIR</td>
            <td class="column2 style76 f style76" colspan="2">$ 611,976</td>
            <td class="column4 style46 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row31">
            <td class="column0 style100 null"></td>
            <td class="column1 style28 null"></td>
            <td class="column2 style28 null"></td>
            <td class="column3 style28 null"></td>
            <td class="column4 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row32">
            <td class="column0 style100 null"></td>
            <td class="column1 style36 null"></td>
            <td class="column2 style28 null"></td>
            <td class="column3 style28 null"></td>
            <td class="column4 style3 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row33">
            <td class="column0 style101 null"></td>
            <td class="column1 style50 null"></td>
            <td class="column2 style51 null"></td>
            <td class="column3 style126 null"></td>
            <td class="column4 style127 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row34">
            <td class="column0 style129 s style131" colspan="5" rowspan="6">FECHA DE PAGO: 08/08/2023</td>
            <td class="column5 style136 null style138" colspan="6"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row35">
            <td class="column5 style139 null"></td>
            <td class="column6 style140 null"></td>
            <td class="column7 style140 null"></td>
            <td class="column8 style140 null"></td>
            <td class="column9 style140 null"></td>
            <td class="column10 style141 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row36">
            <td class="column5 style139 null"></td>
            <td class="column6 style140 null"></td>
            <td class="column7 style140 null"></td>
            <td class="column8 style140 null"></td>
            <td class="column9 style140 null"></td>
            <td class="column10 style141 null"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row37">
            <td class="column5 style133 s style135" colspan="6">______________________________</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row38">
            <td class="column5 style133 s style135" colspan="6">RECIBI CONFORME</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
          <tr class="row39">
            <td class="column5 style77 null style79" colspan="6"></td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
          </tr>
        </tbody>
    </table>
  </body>
</html>
