

@extends('layouts.mainlayout')

@section('main-content')

<h1>The Orlando British Women's Writing Dataset
Release 1: Biography and Bibliography</h1>

<div class="alert alert-info">
	<p>[01-11-2018] Release 1.01 See <a href="#release-notes">1.01 release</a> for more details.</p>
</div>

<h2 class="mt-5">Introduction</h2>

<p>This dataset provides a rich set of linked open data representing women's literary history from the beginnings to the present, concentrated on writing in English in the British Isles but with tentacles out to other languages, literary traditions, and parts of the world. It emerges from the ongoing experiments in literary history being conducted by The Orlando Project, whose textbase is published and regularly updated and augmented as Orlando: Women's Writing in the British Isles from the Beginnings to the Present by Cambridge University Press since 2006, and from the Canadian Writing Research Collaboratory's work in Linked Open Data as a means of enabling digital scholarship and collaboration in the humanities. </p>

<p>The Orlando Textbase is a semi-structured collection of biocritical entries providing detailed information on the lives and writing of more than 1400 writers with accompany literary, social, and political materials to provide context to its representation of literary history. It does not contain digitized versions of primary texts.</p>

<p>The aim of extracting linked data from Orlando's textbase is to make the data accessible in new ways to discovery, querying, analysis, and visualization; to promote interlinking between Orlando and other related materials on the web; and to experiment with the potential of Linked Open Data technologies to support knowledge production and dissemination in the humanities.</p>

<p>This is a first release of the dataset, which will be augmented and refined over time. This release is focused on the internal linking of biographical information using the CWRC ontology, with selective linking out to other ontology terms and other linked data entities. All of Orlando's bibliographical data, linked to Orlando authors, is also included in this release.</p>


<h2>Research Questions</h2>

<p>The ontology contains a number of competency questions. The entire preamble will be helpful in understanding the ontology and its potential uses for elucidating the data. Note that it exists in French as well as English. One key difference between this data and some other datasets is the large number of variables: consulting the ontology, and the related ontologies whose namespaces appear at the top of it, in relation to the data is key to understanding the dataset.</p>

<p>For the purpose of this competition, we suggest some more focused questions (see below) that the current dataset is positioned to illuminate. These could be approached by visualizations in range of formats including charts, network graphs, geospatial maps, heat maps, trend visualization, and infographics.</p>

<p>An example of a chart approach: For the research question, "What is the relevance of family size to religious affiliation, socioeconomic status, or other factors?", produce a series of charts (bar, line, pie charts, etc.) that answer this question.  Make the process interactive so that the user can select the factors for a multi-dimensional visualization.</p>

<p>An example of a network graph approach: what kinds of biographical networks connect British women writers to each other and to other writers? How extensive are kinship networks as opposed to networks based on political or religious affiliation?</p>

<p>An example of a map approach: Can you map out all the geographic information relevant to a person in Orlando?  Can you also map out the person and all the people that they are connected to in Orlando?  Does this map information change over time period, with ethnicity, religion, etc.? How do the countries associated with geographical heritage change over time?</p>

<p>An example of a heat map approach: Taking one of the research questions provided below such as "Does social identity become more diverse over time?" can you represent this as a series of heat maps that plot out social identity (religion, ethnicity, etc.) over time?  This could even be in the form of a video such as <a href="https://www.flickr.com/photos/150411108@N06/43350961005/#">https://www.flickr.com/photos/150411108@N06/43350961005/#</a>.</p>

<p><img src="{{ asset('images/EmilyBronte.png') }}" alt="Emily Bronte Infographic" width="25%"/> An example of trend analysis: the research question, "How is the number of publications related to the number of children a woman writer had?" could be illustrated using dynamic graphs, examples of which can be seen in videos of Hans Rosling's Gapminder visualizations such as <a href="https://www.youtube.com/watch?v=jbkSRLYSojo">https://www.youtube.com/watch?v=jbkSRLYSojo</a>.</p>


<p> An example of an infographics approach: If you Google Emily Brontë, an infographic such as the one shown here is provided.</p>
 
<p>Using the Orlando data, can you produce a more detailed infographic of the author?  Can you then expand this to have additional infographics of people who are connected to her and who also appear in the Orlando data?  Can you find information in the Orlando data and the ontologies that would produce a much different infographic than Google's? What would an infographic of a larger group, such as all writers from a particular historical period, or all writers of a given genre of literature, look like?</p>


<h3>Sample Queries</h3>

<ol>
	<li>What is the relevance of family size to religious affiliation, socioeconomic status, or other factors?</li>

	<li>Does social identity become more diverse over time? Are hybrid cultural forms more common than they were previously? Where are the clusters of hybridity and what are the outliers? </li>

	<li>What do bibliometric visualizations reveal about the publishing networks in the bibliographical data?</li>

	<li>Does the rise and fall of various genres over time within the works of Orlando authors correlate with scholarly accounts of when those genres rose and fell?  </li>

	<li>Which authors are the most isolated in the network, and what factors (for instance, social class, place of publication) seem to be associated with being an outlier?</li>

	<li>Can number of publications be related to the number of children a woman writer had?</li>
	
	<li>Who are the most connected authors in the textbase (most points of contact with other authors) and what are the most common types of connections, in terms of either specific relationships or the contexts in which they occur? Do the types of connections tracked in the dataset modify over time?</li>

	<li>What can a visualization reveal both about the structure of the ontology and the data associated with different components of it? For instance, can it reflect the number and types of instances associated with different components of the ontology, such as by showing the shifting proportions of different Biographical Contexts such as religion, politics, and sexuality as they occur in entries over time?</li>

</ol>

<h2>Linked Open Data</h2>

<p>For more information on Linked Open Data, see <a href="#appendix-a">Appendix A</a>.</p>

<h2>Location</h2>


<table class="table">
        <tbody>
            <tr class="c27">
                <td class="c52" colspan="5" rowspan="1">
                    <p class="c32"><span class="c1">Datasets</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Name</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Description</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Format</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c11"><span>Location</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Triples</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Bio+Bibl</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Entire set of triples</span></p>
                    <p class="c11"><span class="c1">(contains all those listed below)</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">rdf/xml</span></p>
                    <p class="c2"><span class="c1"></span></p>
                    <p class="c11"><span>ttl</span></p>
<p>Graph</p>            
    </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1"><a href="/storage/Orlando_Bio_and_Biblio_Version_1-01.rdf">http://sparql.cwrc.ca/storage/Orlando_Bio_and_Biblio_Version_1-01.rdf</a> [276.7M]</span>
			<p><a href="/storage/Orlando_Bio_and_Biblio_Version_1-01.ttl">http://sparql.cwrc.ca/storage/Orlando_Bio_and_Biblio_Version_1-01.ttl</a> [189.8M]	
		</p>
		<p>http://sparql.cwrc.ca/db/BiographyBibliographyV1</p>            
    </td>
                <td class="c29" colspan="1" rowspan="1">
                	<p>3321746</p>
		</td>
            </tr>
            <tr class="c13">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Biography</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Most biographical information from the Orlando dataset (details below)</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">rdf/xml</span></p>
                    <p class="c2"><span class="c1"></span></p>
                    <p class="c11"><span class="c1">ttl</span></p>
<p>Graph</p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1"><a href="/storage/Orlando_Biography_Subset_Version_1-01.rdf">http://sparql.cwrc.ca/storage/Orlando_Biography_Subset_Version_1-01.rdf</a></span> [105.3M]</p>
                    <p class="c2"><span class="c1"><a href="/storage/Orlando_Biography_Subset_Version_1-01.ttl">http://sparql.cwrc.ca/storage/Orlando_Biography_Subset_Version_1-01.ttl</a></span> [65.3M]</p>
		<p>http://sparql.cwrc.ca/db/BiographyV1</p>                
</td>
                <td class="c29" colspan="1" rowspan="1">
                    <p>1081674</p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">CulturalForms </span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">A subset of Biography focused on social identities</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">rdf/xml</span></p>
                    <p class="c2"><span class="c1"></span></p>
                    <p class="c11"><span class="c1">ttl</span></p>
<p>Graph</p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1"><a href="/storage/Orlando_Cultural_Forms_Subset_Version_1-01.rdf">http://sparql.cwrc.ca/storage/Orlando_Cultural_Forms_Subset_Version_1-01.rdf</a> [19.4M]</span>
			<p><a href="/storage/Orlando_Cultural_Forms_Subset_Version_1-01.ttl">http://sparql.cwrc.ca/storage/Orlando_Cultural_Forms_Subset_Version_1-01.ttl</a> [11M]</p>
		</p>
		<p>http://sparql.cwrc.ca/db/CulturalFormsV1</p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
	           <p>192004</p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Bibliography</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">Standard bibliographic metadata using the Bibframe ontology</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">rdf/xml </span></p>
                    <p class="c11"><span class="c1">ttl</span></p>
		    <p>Graph</p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1"><a href="/storage/Orlando_Bibliography_Subset_Version_1-01.rdf">http://sparql.cwrc.ca/storage/Orlando_Bibliography_Subset_Version_1-01.rdf</a> [171.4M]</span></p>
		    <p><a href="/storage/Orlando_Bibliography_Subset_Version_1-01.ttl">http://sparql.cwrc.ca/storage/Orlando_Bibliography_Subset_Version_1-01.ttl</a> [126.3M]</p>
                    <p>http://sparql.cwrc.ca/db/BibliographyV1</p>
		</td>
                <td class="c29" colspan="1" rowspan="1">
		    <p>2240072</p>
                </td>
            </tr>
            <tr class="c27">
                <td class="c52" colspan="5" rowspan="1">
                    <p class="c32"><span class="c1">Ontologies</span></p>
                </td>
            </tr>
            <tr class="c27">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c10"><span>CWRC </span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c10"><span>T</span><span>he main ontology</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="3">
                    <p class="c11"><span class="c1">rdf/xml </span></p>
                    <p class="c11"><span class="c1">ttl</span></p>
                    <p class="c11"><span>n-triples</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/cwrc.html&amp;sa=D&amp;ust=1538354214215000">http://sparql.cwrc.ca/ontologies/cwrc.html</a></span><sup><a href="#cmnt2" id="cmnt_ref2">[b]</a></sup><sup><a href="#cmnt3" id="cmnt_ref3">[c]</a></sup><sup><a href="#cmnt4" id="cmnt_ref4">[d]</a></sup><sup><a href="#cmnt5" id="cmnt_ref5">[e]</a></sup></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/cwrc.rdf&amp;sa=D&amp;ust=1538354214216000">http://sparql.cwrc.ca/ontologies/cwrc.rdf</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/cwrc.ttl&amp;sa=D&amp;ust=1538354214216000">http://sparql.cwrc.ca/ontologies/cwrc.ttl</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/cwrc.nt&amp;sa=D&amp;ust=1538354214216000">http://sparql.cwrc.ca/ontologies/cwrc.nt</a></span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">17772</span></p>
                </td>
            </tr>
            <tr class="c27">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c10"><span>CWRC genre ontology</span><span>&nbsp;</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c10"><span>L</span><span>iterary genres</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/genre.html&amp;sa=D&amp;ust=1538354214218000">http://sparql.cwrc.ca/ontologies/genre.html</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/genre.rdf&amp;sa=D&amp;ust=1538354214219000">http://sparql.cwrc.ca/ontologies/genre.rdf</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/genre.ttl&amp;sa=D&amp;ust=1538354214219000">http://sparql.cwrc.ca/ontologies/genre.ttl</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/genre.nt&amp;sa=D&amp;ust=1538354214219000">http://sparql.cwrc.ca/ontologies/genre.nt</a></span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">8572</span></p>
                </td>
            </tr>
            <tr class="c27">
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c10"><span>Illnesses and injuries ontology</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c10"><span>I</span><span>llnesses and injury classification based on IDC</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/ii.html&amp;sa=D&amp;ust=1538354214221000">http://sparql.cwrc.ca/ontologies/ii.html</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/ii.rdf&amp;sa=D&amp;ust=1538354214222000">http://sparql.cwrc.ca/ontologies/ii.rdf</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/ii.ttl&amp;sa=D&amp;ust=1538354214222000">http://sparql.cwrc.ca/ontologies/ii.ttl</a></span></p>
                    <p class="c11"><span class="c3"><a class="c4" href="https://www.google.com/url?q=http://sparql.cwrc.ca/ontologies/ii.nt&amp;sa=D&amp;ust=1538354214223000">http://sparql.cwrc.ca/ontologies/ii.nt</a></span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c11"><span class="c1">887</span></p>
                </td>
            </tr>
        </tbody>
    </table>

    <h3>Provenance</h3>

    <p>The datasets have been derived from the text base of The Orlando Project which “explores and harnesses the power of digital tools and methods to advance feminist literary scholarship” (<a href="http://www.artsrn.ualberta.ca/orlando/">http://www.artsrn.ualberta.ca/orlando/</a>). </p>

<p>The dataset is based on the Orlando textbase, which comprises 1413 entries (1117 British women writers, 178 male writers, 177 other women writers—listed twice if their nationality shifted); 13,794 free-standing and 28,807 embedded chronology entries; 29,479 bibliographical listings; 2,749,854 tags; 9,038,958 words (exclusive of tags).</p>
 
<p>The Orlando dataset is XML-encoded text that employs several schemas that encode aspects of the Project's born-digital entries and contextualizing information on the lives and works of writers, which aim to elucidate the conditions of production and reception of their texts, as well as the features of the texts themselves, from a recuperative critical perspective that considers gender and other intersecting social forces to be a salient factor in literary history.</p>

<p>The textbase employs several XML schemas: </p>
<ul>

	<li>Biography - structuring the portions of Orlando entries on the lives of writers</li>
	<li>Writing - structuring the portions of Orlando entries on literary careers and oeuvres
	<li>Event - structuring free-standing events</li>
	<li>Bibliography - structuring bibliographical records</li>
</ul>
<p>The text encoded with these schemas has provided the basis for the extraction process that has produced the dataset provided here.</p>

<h2>Data extraction and transformation</h2>

<p>The data extraction was guided by the CWRC ontologies, which were created on the basis of the XML tagset and the existing Orlando Project data. They leverage a number of existing ontologies, but also create a number of new relationships and numerous data instances.</p>

<p>The CWRC ontologies can be found at <a href="http://sparql.cwrc.ca/">http://sparql.cwrc.ca/</a> from which they can be retrieved in various formats.</p>

<p>The separate ontologies are:</p>
<ul>
	<li><a href="http://sparql.cwrc.ca/cwrc">CWRC ontology</a> - the main ontology - </li>
	<li><a href="http://sparql.cwrc.ca/genre">CWRC genre ontology</a> - literary genres</li>
	<li><a href="http://sparql.cwrc.ca/ii.html">Illnesses and injuries ontology</a> - illnesses and injury classification based on IDC</li>
</ul>

<p>The code used in extraction can be found at <a href="https://github.com/cwrc/RDF-extraction">https://github.com/cwrc/RDF-extraction</a></p>

<p>The basic methodology for producing the RDF from the Orlando SML is to extract relationships from selected Xpath locations in the document. The correspondence between the XML document and the RDF relationships extracted for this dataset can be seen by comparing the XML file (here) and the resulting RDF file (here).</p>

<p>If very specific questions remain, detailed information on extraction decisions is found here. </p>

<h2>Data subsets</h2>

<p>This draft dataset is available as a whole or in three subsets:</p>

<ol>
	<li>Biography, containing:
		<ol>
			<li>Birth and Death - includes birth and death dates for writers for whom these are known, in some cases including birth order within family and cause of death;</li>
			<li>Cultural identities - contains information on the social identities associated with writers, ranging from language, religion, social class, race, colour, or ethnicity to nationality. Such identities shift both historically and at times within writers’ lives;</li>
			<li>Family relations - information on the family members, including spouses, of writers, and at times information related to their occupations;</li>
			<li>Education - includes links to instructors, schools, subjects of study, and credentials earned;</li>
			<li>Friends - includes information about loose associations through to close and enduring friendships to intimate relationships - includes information on both erotic and non-erotic ties;</li>
			<li>Leisure and Society - information on social activities;</li>
			<li>Occupations - covers both significant activities of and jobs held by writers;</li>
			<li>Political Affiliation - information on writers’ political activities including their affiliations with particular groups or organizations and their degrees of involvement;</li>
			<li>Spatial activities - information on writers’ residences, visits, travels, and migration to particular locations. Spatial data coordinates are granular to the level of settlement only; that is, they do not distinguish between different locations in the same place, such as London;</li>
			<li>Violence - information on writers’ experiences of violence on a range of scales</li>
			<li>Wealth - information concerning writers’ poverty, income, and wealth</li>
			<li>Health - information on writers’ physical and mental health and illnesses;</li>
			<li>General biographical materials that don’t align with the specific categories.</li>
		</ol>
		</li>
	<li>Bibliography
		<ol>
			<li>Standard bibliographic data about works published by the authors whose lives are described in the dataset, plus all works referenced in the Orlando textbase.</li>
			<li>Genre classification for the texts by women writers who have entries in Orlando.</li>
		</ol>
	</li>
</ol>


<h2>Precision and Accuracy</h2>

<p>This is an "open world" dataset, which is to say that the absence of an assertion does not indicate that the assertion is untrue.</p>

<p>The relationships between people represented in this dataset are based on inference from the XML. Results of the scripts have been read against key documents to ensure that the assertions that have been created in RDF are generally reasonable, based on the markup, and the scripts adjusted in response. However, not all results could be checked by human beings, and it is important to remember that the XML relationships were created by human beings producing discursive accounts of literary history and therefore seeking to tag notable features of the material they were writing, without awareness that this extraction would later take place. The result is that at times this dataset will produce misleading assertions based on how the data is extracted. </p>

<p>The most common cases are where a person mentioned within an XML tag used to create a relationship is tangentially rather than centrally involved in the relationship associated with that tag. For example, the discussion of Virginia Woolf's novel Orlando contains a mention of Woolf's diary, and that mention is tagged as a genre; as a result, Orlando is identified as a diary as well as a biography, drama, fiction, novel, history, masque, and mock form. Another example is that the name of a commentator or a contemporary witness, if mentioned and tagged in the XML within the prose of a tag, may be extracted and create a false assertion of a relationship between the subject of an Orlando entry and the commentator or witness, whereas they were being named in the document as a source of information about the relationship. We have worked to eliminate such false assertions where we can do so systematically during the data extraction process, and plan to work towards more sophisticated means of eliminating such false assertions such as of personal relationships between people whose lives did not overlap.</p>

<p>However, these and other factors also mean that not every relationship indicated by the XML has necessarily been extracted, particularly if such extraction would lead to a substantial number of false assertions in addition to true ones. The extraction scripts are available for consultation <a href="https://github.com/cwrc/RDF-extraction">here</a>. </p>


<h2>Omissions</h2>

<p>This dataset is not in any sense comprehensive, given that it is based both on historical sources full of gaps and selectivity with respect to the inclusion of particular details. The markup from which the data is extracted is also on the more interpretive end of the spectrum, meaning that there are inconsistencies in application, even though encoders receive extensive training and all markup has been reviewed by a senior scholar.</p>

<p>In addition, there are some specific omissions from this draft dataset. The following major components of the Orlando data are not yet present:</p>

	<ol>
	<li>Personal name variants, including pseudonyms;</li>
	<li>Occupations for family members (not yet linked to ontology instances);</li>
	<li>Events related to birth, death, family, and interpersonal contexts, plus thousands of freestanding events that include information on other writers and historical contexts;</li>
	<li>Orlando literary relations, apart from those represented in the bibliographic data;</li>
	<li>Scholarly notes and citation information (found at present only in the full Orlando textbase).</li>
</ol>

<p>Other omissions are related to the provenance of the dataset and the priorities of the Orlando Project itself. Specific genre information is present only for the works of women writers with entries and not for all bibliographic records. In general, information on men writers and writers from outside Britain is less full than information on British women writers.</p>

<p>This is not yet a <a href="https://www.w3.org/DesignIssues/LinkedData.html">5-star LODset</a>. Still to come are more links out to other LOD identifiers, plus dereferenceable URIs for the writers themselves, who are currently signalled with placeholder identifiers in a format based on their standard names. Thus, although <a href="http://cwrc.ca/cwrcdata/Abdy_Maria">http://cwrc.ca/cwrcdata/Abdy_Maria</a> appears to be a URL, it will not resolve to a webpage and the user will get a 404 error. In addition there are “blank nodes” in the format such as "N59254ff7a0fa44a6b36eb878ea08b7a0" that occur in the Web Annotation component of the data. These are generated in order to link each annotation/context to the string of turtle for the triples that is associated with that annotation, so that a system can make that link in the future. For many purposes, it may be best just to filter those out.</p>


<h2>Key decisions and strategies</h2>

<h3>Anonymous nodes</h3>

<p>There are technically anonymous nodes, that is nodes that do not have labels and are not dereferencable. Their identifiers come in forms such as: N296d21fa528149a3a49ae7099a6e37fa.</p>

<p>Nodes such as "Annie Writer's brother" have been created when we know something about the person even though we don't know their name. This means people exist in the ontology that do not have URIs and therefore cases can exist where one person is separately defined multiple times. </p>

<h3>Natural language processing </h3>

<p>NLP has been employed judiciously to complement the XML in cases where there was obvious benefit and we could expect a high level of accuracy. For instance, the high degree of overlap in vocabulary between terms used in the <pre>&lt;CAUSEOFDEATH&gt;</pre> tag and words occurring in the <pre>&lt;HEALTH&gt;</pre> tag allowed us to create assertions about health factors that were not supported by the markup.	<pre>&lt;/HEALTH&gt;</pre>

<h3>Regularization, disambiguation, and linking of data </h3>

<p>Regularization was available in the dataset only for personal names and organizations. In other areas, such as for religions, it has been achieved through the ontology, wherein the "skos:altLabel" property indicates terms that have been grouped together. </p>

<p>In the case of place names, the results of automated matching (of the combination of settlement name and its associated region and geo-political unit) have been reviewed for accuracy, so geospatial coordinates should be accurate on places down the the level of the settlement or populated place. We use the Geonames for most place identifiers, supplemented by Getty placenames where needed. These matches are made with a view to making the data mappable. However, we recognize that historical shifts and political contestation may make the labels associated with particular past and present places problematic.</p>

<p>While it is highly desirable to convert strings of text to things, in the sense of defined, dereferencable entities, this is not possible or indeed desirable in all cases, given the state of the source data. Where it has been possible to link to an external ontology or to regularize vocabulary within the data and create LOD instance of terms within the CWRC ontology, this dataset has done so. However, in some cases the data has been so idiosyncratic or heterogeneous that this has not been done. This is often the case for a few instances within a larger subset of instances that have been regularized, such as religion. In the case of education, there were many outliers that have not been created as linked data instances. There are thousands of occupations, which are at present represented as strings, but a subset of common occupations grouping terms together is forthcoming.</p>

<h2>Notable features</h2>

<p>Events provide content with temporal and geospatial locators amenable to timelines or mapping. We draw on the Simple Event Model, extending it to indicate separately from date values themselves the degree of certainty associated with an event's date, and providing typing of events specific to our domain. Not all Contexts have events at present, although all will eventually: at present they are concentrated on Cultural Forms, Health, Violence, Wealth, Leisure and Other Life Events.  Note that although birth and death events are not present in this dataset, there are birth and death dates for authors that can be used as a basis for modeling temporal change.</p>

<p>Contexts use the Web Annotation data model to provide links from particular entities to their discursive contexts. "MotivatedBy:identifying" annotations indicate all entities mentioned in a particular discursive context, so one can group mentions of a certain person or persons by Context type. "MotivatedBy:describing" annotations include as annotation bodies the writer who is being described; associated RDF triples are included as plain text bodies of these annotations with identifiers in a form such as "N59254ff7a0fa44a6b36eb878ea08b7a0". These plaintext values can be used to identify the exact triple that is being described by the data. During processing it is safe to use these strings as valid Turtle or N-Triples. </p>

<p>Spatial data is often but not always (e.g. place of death) regularized to <a href="http://www.geonames.org/">Geonames</a> or the <a href="http://www.getty.edu/research/tools/vocabularies/tgn/index.html">Getty Thesaurus of Geographic Names</a> identifiers.</p>

<p>Bibliography objects use the <a href="http://www.loc.gov/bibframe/docs/index.html">BIBFRAME RDF</a> schema supplemented by a couple of terms from <a href="https://schema.org">schema.org</a>.</p>

<h2 id="release-notes">Release Notes</h2>

<h3>Release 1.01</h3>
<b>01-11-2018</b>

<ul>
	<li>Removed: invalid properties on certain subjects in biographical data, due to error in extraction process.</li>
	<li>Changed: better conversion of invalid dates in bibliographic data.</li>
	<li>Please use the new versions below.</li>
</ul>


<h2>License</h2>

<p>This dataset is made available under a CC-BY-NC license. If you make use of this dataset, we would appreciate being informed of this at <a href="mailto:cwrc@ualberta.ca">cwrc@ualberta.ca</a>.</p>

<h2>Contributors</h2>

<p>to the production of this dataset: </p>

<p>Jeffery Antoniuk. University of Alberta. Orlando Project programmer and systems analyst. Assisted in preparation and extraction of dataset.</p>

<p>Susan Brown. University of Guelph. Project lead. Produced extraction guidelines and guided process.  <a href="https://www.uoguelph.ca/~sbrown/">https://www.uoguelph.ca/~sbrown/</a> </p>

<p>Joel Cummings. Responsible for overseeing and contributing to technical work on the ontology and making key design decisions to support extraction from a variety of sources.</p>

<p>Jasmine Drudge-Willson. University of Guelph. Research Assistant. Responsible for researching and modeling structural and theoretical aspects of external ontologies, and how they relate to the aims of the CWRC ontology. </p>

<p>Abigel Lemak. University of Guelph. PhD student in Literary Studies. Overall project management, as well drafting ontology terms and definitions, particularly those that deal with Cultural Forms.</p>

<p>Kim Martin. University of Guelph. Helped with project management. Produced sample triples for testing accuracy of extraction.</p>

<p>Alliyya Mo. University of Guelph. Wrote the extraction scripts for cultural form extraction and much of the rest of the biography data. Minted instance data for cultural forms, genres, religions, politIcal affiliations. Responsible also for much ontology refinement reflecting the extraction process.</p>

<p>Michaela Rye. University of Guelph. Undergraduate research assistant. Responsible for tag cleanup as well as disambiguating and drafting ontology terms, particularly those that deal with Occupations.</p>

<p>Gurjap Singh. University of Guelph. Co-op student. Responsible for extraction of birth, death, and family data from Orlando data. Created script to combine triples from the separate scripts. Queried Geonames API to get URIs for locations in Orlando.</p>

<p>Thomas Smith. University of Guelph. Undergraduate research assistant. Responsible for tag cleanup as well as disambiguating and drafting ontology terms, particularly those that deal with geospatial data, educational awards, literary awards, and Occupations.</p>

<p>Deborah Stacey. University of Guelph. Associate professor in the School of Computer Science. Helped coordinate the process. Wrote scripts for extracting cause of death and health triples. <a href="http://ontology.socs.uoguelph.ca/">http://ontology.socs.uoguelph.ca/</a></p>

<p>See also the <a href="http://orlando.cambridge.org/public/svDocumentation?formname=t&d_id=CREDITSANDACKNOWLEDGEMENTS">Orlando Project</a> credits and the CWRC Ontology Credits</p>

<h2 id="appendix-a">Appendix A</h2>

<p>Various tools exist to handle and produce Linked Open Data (LOD) in its various formats. </p>

<p>CWRC uses an <a href="https://www.w3.org/OWL/">OWL</a> <a href="https://www.w3.org/TR/rdf-primer/">RDF</a> ontology schema which means data is represented in triple format (subject, predicate, object). The RDF is then exported to one of several formats which express the RDF in a unique syntax. </p>

<p>To perform the transformation and handling of RDF several libraries are available depending on your language of choice, here are our recommendations:</p>

	<ul>
	<li>Python - <a href="https://pypi.org/project/rdflib/">RDFLib</a></li>
	<li>Java - <a href="https://jena.apache.org/">Apache Jena</a></li>
	<li>PHP - <a href="https://jena.apache.org/">EasyRDF</a></li>
</ul>


<p>Each of these libraries allows one to load in the RDF data, and traverse the data as a graph which is useful in identifying links between data. More comprehensive libraries like Apache Jena allow one to query the dataset within your application to infer and make queries on the data. </p>

<p>A very full set of recommended resources on LOD has been gathered by the folks at Islandora's <a href="https://islandora.ca/CLAW">CLAW</a> project, and can be found <a href="https://islandora-claw.github.io/CLAW/user-documentation/intro-to-ld-for-claw/">here</a>.</p>


<h3>Querying using the SPARQL Endpoint</h3>

<p>We have also provided each ontology within a Graph so that it can queryed using the <a href="http://sparql.cwrc.ca/sparql">sparql endpoint</a>. This requires knowledge of <a href="https://www.w3.org/TR/rdf-sparql-query/">SPARQL</a> but is powerful as an inspection and generation tool.</p>

<p>As an example to get information about bibliography classes we provide this query which you can paste in the SPARQL box: </p>

<pre>
PREFIX rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt;
PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt;
PREFIX bf: &lt;http://id.loc.gov/ontologies/bibframe/&gt;

SELECT * WHERE {
  GRAPH &lt;http://sparql.cwrc.ca/db/BibliographyV1&gt; {
      ?sub bf:place ?obj .
    ?obj rdf:value ?o .
  }
} 
 LIMIT 10
</pre> 


@endsection
