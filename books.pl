#!/usr/bin/perl
print "content-type: text/html; charset=utf-8  \n\n";
print '<!doctype html><html>	';

use utf8;
use strict;
use warnings;
use File::stat;
use File::Basename;
use Time::localtime;
#use Data::Dumper;

print '<title> Kesavan Muthuvel\'s Collection of Materials </title>  ';

open (INFILE, "books.pl.js") || die "Urk!"; 
my @lines = <INFILE>;close (INFILE);

my $heads = `php head.php`;
#my @head  = <INFILE>;close (INFILE);
#print @head;

my $content = "	<body><p>
<h3>Materials I have </h3> 
Here goes all my collections from internet.You are welcome to redistribute these materials, always. Please be aware of the materials copyright/copyleft if there.You can filter/sort as per your need! thanks to <a href='http://datatables.net/'>datatables jQuery plugin  </a><p>  In case , if you get some 403(Permission denied) Error means, something is updating on background , try to download after a moment.Try to check your luck by switching between HTTP <=> HTTPS.If still unable to download means, something wrong,let me know by sending a feedback. Link below !  

</p> ";

print @lines;
print $heads;
print $content ;

print "	<table> <tr> <td >";	#PSEUDO TABLE 
print '	<table align="left" class="display" id="books" cellpadding="0" cellspacing="0" border="0" >
				<thead> <tr> 
					<th> Book </th> <th> Type</th> <th> Size </th> <th>Size(Readable)</th><th> Last Modified </th> 
				</tr> </thead>';
my @books_loc = ( 
"/home/kesavan/apps/nextcloud99/data/kesavan/files/study/" ,
"/home/kesavan/apps/nextcloud99/data/kesavan/files/books2/",
);

my $conflicts = qr/CONFLICT/i; # Replace with your desired pattern using regular expression

foreach my $dir(@books_loc){
	print genTable($dir);
}

sub genTable {
	my $dir = shift ;
	my $return = '';

	my %href  = ('study' => 'file9', 'books2' => 'epub9' );
	my $final_href = $href{basename($dir)};

	opendir(DIR, $dir) or die $!;
	while (my $file = readdir(DIR)) { 
		next if ($file =~ m/^\./);	#ignore files beginning with a period
		next if $file =~ /$conflicts/;	#ignore sync conflicted items

		my $st = stat($dir.$file) or die "No $dir/$file: $!";	#print Dumper($dir, $file );	
		my $timestamp = ctime(stat($dir.$file)->mtime);	
		#my $ft        = File::Type->new();
		#my $file_type = $ft->mime_type($dir.$file);
		my ($ext) = $file =~ /([^.]+)$/;
		my $disp_file = $file ; 
		$disp_file =~s/(\.[^.]+$)//ig;
		$disp_file =~s/[\.\-_]/ /ig;
		$return .= <<"TABLE";
					<tr>	\n
						<td><a target='_blank' download href='$final_href/$file' > @{[uc($disp_file)]}</a></td> \n
						<td>@{[uc($ext)]}</td>\n
						<td>@{[$st->size]} </td>\n
						<td>@{[formatSize($st->size)]} </td>\n
						<td><font size='-1'>$timestamp</font></td>\n
					</tr> \n
TABLE
	}
	closedir(DIR);
	return $return ;
}

	print '</table>';

sub formatSize {
    my $size = shift;
    my $exp = 0;
    my $units = [qw(B KB MB GB TB PB)];
    for (@$units) {
        last if $size < 1024;
        $size /= 1024;
        $exp++;
    }
    return  sprintf("%.2f%s", $size, $units->[$exp]);
    #return wantarray ? ($size, $units->[$exp]) : sprintf("%d", $size, $units->[$exp]);
}

open (INFILE, "tail.php") || die "Urk!"; my @tail = <INFILE>;	close (INFILE);
print "</td> </tr> <tr> <td> @tail </td> </table>";	#PSEUDO TABLE 
print "</body> </html>";
