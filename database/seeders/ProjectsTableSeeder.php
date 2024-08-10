<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'id'            => 1,
                'title'         => 'TOP LUXURY APARTMENT',
                'code_name'     => 'FIVE IN A ROW',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'Nimonah Architetcs',
                'location'      => 'Woreda 10 ,Bole Sub city, Addis Ababa,Ethiopia',
                'year'          => '2020',
                'site_area'     => '15000',
                'floor_area'    => '63730.1',
                'story_num'     => '2B+G+11 (12)',
                'client'        => 'Abebe Dinku',
                'budget'        => '3377690000.00',
                'category'      => 'large',
                'status'        => 'Under Construction',
                'description'   => 'Top real estate, is positioned as a landmark residential development in the most desirable living areas
                                    of the city containing other amenities, together with restaurants and retail shopping. The design of
                                    this development uses the space efficiently and effectively with modern general look of the buildings
                                    that will improve the environment as an urban development point of view.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 2,
                'title'         => 'AMIBARA MIXED COMPLEX',
                'code_name'     => 'THE NEIGHBORHOOD',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'Nimonah Architetcs',
                'location'      => 'Arada Sub city, Addis Ababa, Ethiopia',
                'year'          => '2022',
                'site_area'     => '35000',
                'floor_area'    => '0',
                'story_num'     => '3B+G+16-35 (Phase 1)',
                'client'        => 'Amibara Properties',
                'budget'        => '1855000000.00',
                'category'      => 'large',
                'status'        => 'Under Construction',
                'description'   => 'Amibara properties sets out to create a masterpiece complex at the center of Addis
                                    Ababa which will be a bench mark for city’s development, having apartment
                                    buildings, shopping malls, branded apartment as well as office building. In addition,
                                    to influence the life style of our community and residents of Addis Ababa at
                                    large. Following the design, it set out to create a maximum shopping experience
                                    on the road side, where as a vehicle free zone on the prone zone of the complex..
                                    * Project has 5 phases: Phase One : 2 residential Blocks | Phase Two : 3 residential Blocks |
                                    Phase Three : 2 residential Blocks | Phase Four : Office Tower | Phase Five : Mall and Final
                                    executive apartment./GGL',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 1,
                'postedBy'      => 0,
            ],
            [
                'id'            => 3,
                'title'         => 'TOP HOTEL',
                'code_name'     => 'THE CROWN',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'Nimonah Architetcs',
                'location'      => 'Woreda 11 , Kirkos Sub City ,Addis Ababa,Ethiopia',
                'year'          => '2021',
                'site_area'     => '6275.55',
                'floor_area'    => '68703.8',
                'story_num'     => '3B+G+21 (22)',
                'client'        => 'Top Beverages Industries & Trading PLC',
                'budget'        => '3641301400.00',
                'category'      => 'large',
                'status'        => 'Under Construction',
                'description'   => 'A luxury hotel, by Top water is set to be constructed at the heart of Addis Ababa havng the public
                                    spaces such as bars, restaurants and meeting halls on the podium. The façade of the hotel is one of
                                    the unique character it holds, reflecting idiosyncratic features and boldness of the architecture.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 4,
                'title'         => 'AL-IMRAN MOSQUE',
                'code_name'     => 'RAIN OF LIGHTS',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'Nimonah Architetcs',
                'location'      => 'Addis Ababa,Ethiopia',
                'year'          => '2021',
                'site_area'     => '5897',
                'floor_area'    => '0',
                'story_num'     => 'B+G+2 (3)',
                'client'        => 'AL-IMRAN MOSQUE',
                'budget'        => '171013000.00',
                'category'      => 'large',
                'status'        => 'Under Construction',
                'description'   => 'The mosque is the center of Muslim culture; a sacred place where people offer their obligatory fivetimes-
                                    a-day prayers. Light allows one to see clearly the truth of the world. The solid wall and mass are
                                    to represent the traditional Ethiopian architecture as well as the unique Arabic way of life to achieve
                                    monumentality and sacred gist. Consequently opening perforations are designed to mimic nature in
                                    its irregularity and randomness, the perforation permit daylight creates a rain of light into the interior
                                    space.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 5,
                'title'         => 'DE-VITA MIXED DEVLOPMENT',
                'code_name'     => 'THE GIANTS',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural Design"]',
                'collaborators' => '—',
                'location'      => 'Arada and kirkos,Addis Ababa,Ethiopia',
                'year'          => '2022',
                'site_area'     => '54000',
                'floor_area'    => '230670',
                'story_num'     => 'B+G+29 (30)',
                'client'        => 'Salvatore De vita',
                'budget'        => '8248829134.15',
                'category'      => 'large',
                'status'        => 'Design proposal',
                'description'   => 'De vitas properties sets out to develop high quality properties that meet the international
                                    standards for both residential and commercial purposes by creating a mixed
                                    urban complex design in the middle of Addis Ababa. The project includes permanent
                                    re-development of the site into high density mixed residential, commercial and service
                                    complex .The design extends the river as a major resource to the site by creating
                                    different axis which accommodate open and interactive landscape. The towers are
                                    cascading to the direction of the river to create a better pleasant views toward to the
                                    site. The development will include an apartment complex, office, hotel, commercial
                                    spaces, recreational space, parking, playground and greeneries .',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 6,
                'title'         => 'DE-VITA MIXED DEVELOPMENT',
                'code_name'     => 'THE INSIDE-OUT CUBE',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural Design"]',
                'collaborators' => '—',
                'location'      => 'Arada and kirkos,Addis Ababa,Ethiopia',
                'year'          => '2022',
                'site_area'     => '10000',
                'floor_area'    => '118662',
                'story_num'     => 'B+G+11 (12)',
                'client'        => 'Salvatore De vita',
                'budget'        => '8175811800',
                'category'      => 'large',
                'status'        => 'Design proposal',
                'description'   => 'De vitas properties sets out to develop high standard mixed apartment complex on
                                    an ideal site within the city of Addis Ababa where the specific location will be identified
                                    in the further discussions with the city administrations. The design extends quality
                                    architecture with vibrant and inclusive urban spaces where the central ingredients
                                    used to create a livable community. The façade treatment is designed based on
                                    the idea of inclusive and exclusive space where the outer part is treated using a simple
                                    facade treatment and the inclusive which is the side facing the central urban
                                    space by making it more livable treating it with balcony façade treatment. The development
                                    will include an apartment complex, commercial shopping, various services,
                                    recreational space, parking, playground and greeneries.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 7,
                'title'         => 'HILL BOTTOM REAL ESTATE',
                'code_name'     => 'THE DOMINO',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural Design"]',
                'collaborators' => '',
                'location'      => 'Addis Ababa,Ethiopia',
                'year'          => '2022',
                'site_area'     => '10000',
                'floor_area'    => '118662',
                'story_num'     => 'B+G+11 (12)',
                'client'        => 'Salvatore De vita',
                'budget'        => '4191669300.00',
                'category'      => 'large',
                'status'        => 'Design Proposal',
                'description'   => 'Under the concept of a village neigh• borhood, the design envisioned to create a
                                    self-sufficient living quarter that accommodates a variety of amenities within it. With
                                    this regard, The estate aims to create a luxury lifestyle for its residents through the
                                    combination of modern amenities, health and sports facilities. This makes the project
                                    unique and original. This quality of the project will definitely insure sufficient achievement
                                    of economic returnsof our investment.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 8,
                'title'         => 'HORRA CORPORATION FACTORY',
                'code_name'     => 'THE BEAN',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Façade Renovation", "Interior Design"]',
                'collaborators' => 'KIT Interiors PLC',
                'location'      => 'Addis Ababa,Ethiopia',
                'year'          => '2021',
                'site_area'     => '34300',
                'floor_area'    => '0',
                'story_num'     => 'G+0 (1)',
                'client'        => 'Horra Corporate Group',
                'budget'        => '53000000.00',
                'category'      => 'medium',
                'status'        => 'Completed',
                'description'   => 'This new coffee processing facility is different. It takes the spirit of the surrounding natural
                                    world and weaves it through the interior of an existing warehouse shell. We typically associate
                                    with production facilities. Color, texture, and organic shapes create an uplifting and exciting
                                    space, bringing a smile to employees’ and visitors’ faces alike. The scope included interior design
                                    of the office areas, the front façade and entrance design, and service areas for the employees.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 1,
                'postedBy'      => 0,
            ],
            [
                'id'            => 9,
                'title'         => 'AGANA INTERNATIONAL APT.',
                'code_name'     => 'THE HOVERER',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Façade", "Interior Design"]',
                'collaborators' => 'KIT Studio',
                'location'      => 'Addis Ababa,Ethiopia',
                'year'          => '2019',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => '2B+SB+G+16 (17)',
                'client'        => 'Agena International',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => 'Under Construction',
                'description'   => 'The original design of the development is conceived to strengthen the area role as a center of commerce,
                                    working space and residential area as one complex. To further achieve the intent of the design,
                                    redefining the existing program considering the urban context of the site to make more vibrant and
                                    viable business center. Having analyzed the context, provision of state of the art fitness center, spa
                                    and office space at the commercial floors and redesign partition layout to the apartment units. Compositionally
                                    the commercial floors resonate an open approach which invites customer to the building
                                    using clear glass to the front side, while approaching the apartment floors with different color treatment
                                    to the outside of the façade in order to create a vibrant exterior look that reflect the character
                                    of the surrounding.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 10,
                'title'         => 'MNS APARTMENT',
                'code_name'     => 'THE LINE',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'KIT Studio',
                'location'      => 'Bole sub city,Addis Ababa,Ethiopia',
                'year'          => '2019',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => 'B+G+14 (15)',
                'client'        => 'MNS Property',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => 'Under Construction',
                'description'   => 'The development occupies a prominent position on wello-sefer to atlas street. The sleek,
                                    modern vertical façade element of the 14 story apartment building creates a unique outdoor
                                    balcony between the vertical lines gives access to visual vista to most of the bole area and
                                    tropical garden to the front side of the building. The upper most area with its elongated façade
                                    element create a modern pergola system which in turn gives shade to the communal area for
                                    the residences at the roof top. The 14 story residential tower comprises 14 spacious residences
                                    all of them are 3 bedroom typologies, and the ground space left for the car parking.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 11,
                'title'         => 'RIVERSIDE APARTMENT',
                'code_name'     => '',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => '',
                'location'      => 'Addis Ababa, Ethiopia',
                'year'          => '2021',
                'site_area'     => '350',
                'floor_area'    => '3021.9',
                'story_num'     => '2B+G+M+9',
                'client'        => 'Ato Yohannes Abreham Mebrahtu',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => '',
                'description'   => 'This residential project will be one of the most luxurious residences in the city, standing in one of the
                                    most desired area if the city. Providing exceptional apartments and access to city views for all units.
                                    The design of the luxury apartments begins as an experience of arrival and throughout the journey to
                                    home. A key driver is to enhance a close connection to the natural surroundings of air, light, landscape
                                    and river throughout the journey.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 12,
                'title'         => 'GRAR INT.',
                'code_name'     => 'MIXED BUILDING',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Façade Design", "Interior Design"]',
                'collaborators' => 'Kit Interior PLC',
                'location'      => 'Bole sub city,Addis Ababa,Ethiopia',
                'year'          => '2022',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => '0',
                'client'        => 'GRAR International',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => 'Under Construction',
                'description'   => 'Buildings at this scale house a community of people who live, work, and play in
                                    what they consider home. This new lifestyle is formed by a building that is shaped to
                                    be flexible, creates strong connections, and allows for diverse activities. The stepped
                                    volumes also present the opportunity to organize extensive roof deck amenities
                                    for the residents at different levels with views of the city. The volume dedicated to
                                    residential programs, office floors and commercial spaces.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 13,
                'title'         => 'IEC YOUTH CENTER',
                'code_name'     => 'THE REBEL',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'KIT Studio',
                'location'      => 'Sar Bet, Addis Ababa, Ethiopia',
                'year'          => '2022',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => 'G+2 (3) *TOPGRAPHY BASED',
                'client'        => 'Ethiopian Evangalical Church',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => 'Under Construction',
                'description'   => 'The youth center situated at the international evangelical church is a very unique project of ours. It
                                    is set out to be constructed by containers found at the site, promoting the use of material recycling.
                                    The youth center includes a minim library, performing area, games centers and an auditorium. The
                                    containers will be painted vibrant colors so as to reflect behavior of the youth, being full of energy
                                    and life adventures.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 1,
                'postedBy'      => 0,
            ],
            [
                'id'            => 14,
                'title'         => 'HORRA HEAD OFFICE',
                'code_name'     => 'THE WAFFLE',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural Design"]',
                'collaborators' => 'KIT Studio',
                'location'      => 'Addis Ababa, Ethiopia',
                'year'          => '2021',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => '0',
                'client'        => 'Hora Co',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => 'Under Construction',
                'description'   => 'The 14 story tower is located between wello-sefer to atlas street. The office tries to demonstrate
                                    flexibility of its accommodation taking account of uplifting workspace which tries to adapt
                                    changes in the workplace. compositionally the building can be thought as a framed cube, with
                                    the services and circulation cores framing the office floor creating relaxed office space comfortable
                                    for changes and different arrangement when it is needed. At ground level 5-meter high
                                    glazed reception provides a transition from the street along with mezzanine floor of restaurant
                                    provision for the employees. At the top of the building a double height office space gives the
                                    executive manager with board room create symbolic expression of the company’s vision.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 15,
                'title'         => 'BISET HOTEL',
                'code_name'     => '',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Modification", "Interior Design"]',
                'collaborators' => '',
                'location'      => 'Bahirdar, Ethiopia',
                'year'          => '2021',
                'site_area'     => '869',
                'floor_area'    => '3197.2',
                'story_num'     => 'G+6 (7)',
                'client'        => 'Ato. Biset',
                'budget'        => '169451600.00',
                'category'      => 'medium',
                'status'        => 'Under Construction',
                'description'   => 'Standing in one of the most visited city in Ethiopia, Biset hotel composes a quality
                                    service to its customers with unforgettable experience in the hotel. This is all made
                                    possible by the architectural modifications and exceptional interior design works.
                                    Now, it is one of the well-known and most preferred hotels in Bahir Dar. The clients
                                    are happy and satisfied which is the firms first priority.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 16,
                'title'         => 'LEM LEM HOTEL',
                'code_name'     => '',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => '',
                'location'      => 'Mekelle, Ethiopia',
                'year'          => '2020',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => '0',
                'client'        => '',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => 'Halted',
                'description'   => 'With its modern Architectural look, Lemlem hotel is standing proud in the cityscape
                                    of Meke le. Providing luxury accommodation that is one of a kind in the city. The design
                                    of this hotel is well thought and made to be one that you can easily recognize.
                                    For all the rooms of the hotel, natural light and ventilation is made accessible thus
                                    reducing cost for energy. The space quality and standards were given the top priority.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 17,
                'title'         => 'SENNA HOTEL',
                'code_name'     => 'PENDENTIVES',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'NIMONAH CONSULTING ARCHITECTs',
                'location'      => 'Bole sub city, Addis Ababa, Ethiopia',
                'year'          => '2021',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => '0',
                'client'        => 'O\'clock General Trading p.l.c.',
                'budget'        => '0',
                'category'      => 'medium',
                'status'        => 'Under Construction',
                'description'   => 'Senea Hotel would be the city’s latest addition to the hospitality scene, with the
                                    objective of providing our clients with the greatest experience of what classical
                                    hotel design may be. Determined to break away from the pervasive dullness
                                    of hotel appearance, the Hotel is developed with vernacular environment in
                                    mind, where it wanted to represent Arabic Architectural touch displayed across
                                    the façade as well as interiors. These can be evident in the use of classic components
                                    such as arched windows. It may be a one-of-a-kind monument, a
                                    well-constructed hotel complex, or a style classic from a timeless classic. Aside
                                    from these features, the space articulation as well as the interior accents have
                                    accomplished the objective of becoming a classic hotel while still having a modern
                                    touch. All of these may have aided the designed Hotel Complex in maintaining
                                    harmony with one another and refining the conceptual tale of the facility
                                    for guests. Aside from the effort of becoming Vernacular, one or two pieces of
                                    modern classic are added to the mix, boosting the quality and attaining the
                                    targeted design objectives.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 18,
                'title'         => 'HOSAE REAL ESTATE',
                'code_name'     => '',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Master Planing", "Interior Design"]',
                'collaborators' => 'KIT Studio',
                'location'      => 'Yerer Bir ,Addis Ababa,Ethiopia',
                'year'          => '2017',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => 'G+1 Residence, G+4 Apartment',
                'client'        => 'APMG Properties',
                'budget'        => '0',
                'category'      => 'small',
                'status'        => 'Under Construction',
                'description'   => 'Hosae, the pioneer real estate company, aimed to project the ultimate purpose and the
                                    mental image of sheltering through a mass housing, which is a safe and a secure place
                                    that provides both privacy and protection from the elements and the temperature
                                    extremes of the outside environment. Therefore, admittedly, this project achieved the
                                    thermal comfort and making it pleasant for occupants.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 19,
                'title'         => 'ABIY BEHILU RESIDENCE',
                'code_name'     => 'MIRROR',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'KIT Studio',
                'location'      => 'Woreda 02, Bole Sub city, Addis Ababa, Ethiopia',
                'year'          => '2021',
                'site_area'     => '269',
                'floor_area'    => '921.6',
                'story_num'     => 'B+G+2+Terrace (2)',
                'client'        => 'Abiy Behilu',
                'budget'        => '26726400.00',
                'category'      => 'small',
                'status'        => 'Completed',
                'description'   => 'The focus of this Residences careful design was on meeting the requirements and
                                    desires of the user while also generating new daily routines. Open floor plans, a glass
                                    façade, the option of shielding to provide solitude, and simplified sociability between
                                    family members and neighbors, which have a definite modern touch expressed in
                                    simplicity. It is also a design that challenged the perception of the stair as only a circulation
                                    element, but rather as an ornament that adds aesthetic value to the interior
                                    space experience. It also offers flexibility in terms of enclosures, human size, and how
                                    the house interacts with its immediate surroundings, such as temperature, sound,
                                    wind, and views, in addition to view-related elements. Last but not least, the collaboration
                                    between the client and the architectural team to produce the design plan and
                                    build the house are reflected in the masterpiece.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 20,
                'title'         => 'ADEM KEDIR RESIDENCE',
                'code_name'     => 'GLASS HOUSE',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => '',
                'location'      => 'Addis Ababa, Ethiopia',
                'year'          => '2020',
                'site_area'     => '0',
                'floor_area'    => '0',
                'story_num'     => 'G+2(3)',
                'client'        => '',
                'budget'        => '0',
                'category'      => 'small',
                'status'        => 'Completed',
                'description'   => 'The design of this project, which aims to provide our customer with the greatest and most luxurious home experience,
                                    required a great deal of human inventiveness. Alongside the projects, the private villas demonstrate how architects
                                    create structures that mix context and utility in ways that support comfort, seclusion, and material detail to provide
                                    a luxurious experience. The entire construction team was tasked with finding the most innovative ways to satisfy the
                                    demands of the customer, which entailed conducting ongoing, constructive tests of various ways to employ building
                                    materials for the structure, walls, flooring, and other finishes. Not to mention, interior spaces aim towards an
                                    uncluttered, lightly planned spaciousness where significant, frequently endearingly simple moments might naturally arise.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 21,
                'title'         => 'FEVEN SAHELE RESIDENCE',
                'code_name'     => '',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => '',
                'location'      => 'W02 , Nifas Silk Lafto Sub City ,Addis Ababa,Ethiopia-',
                'year'          => '2022',
                'site_area'     => '175',
                'floor_area'    => '490.7',
                'story_num'     => 'SB+G+2 (3)',
                'client'        => 'W/o Feven Sahele Gebre',
                'budget'        => '14230300',
                'category'      => 'small',
                'status'        => 'Under Construction',
                'description'   => 'Characterized by a luxury and home feel is the residence of w/ro Feven Sahle. It is
                                    current in the final stages of the construction phase in “Jemo Michael” in “Nifas
                                    silk” sub city. Up on its compilation, it will be the one that stands out as it features
                                    a modern design approaches.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 22,
                'title'         => 'WOSEN APARTMENT',
                'code_name'     => '',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'Kit Studio',
                'location'      => 'Addis Ababa, Ethiopia',
                'year'          => '2021',
                'site_area'     => '284',
                'floor_area'    => '1410',
                'story_num'     => 'B+G+5 (6)',
                'client'        => 'Wosen & Mike',
                'budget'        => '74730000',
                'category'      => 'small',
                'status'        => 'Under Construction',
                'description'   => 'Wosen apartment Is designed to accommodate the owners and people who rent
                                    units in a single building. The circulations is design to be separated making the different
                                    units not disturb each other. The exterior is treated with a limited number of
                                    materials and textures resulting with an elegant look. The form is well put together
                                    with careful attention to proportion and scale.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 23,
                'title'         => 'VILLA YONATAN',
                'code_name'     => '',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'Kit Studio PLC',
                'location'      => 'Addis Ababa, Ethiopia',
                'year'          => '2021',
                'site_area'     => '500',
                'floor_area'    => '340',
                'story_num'     => 'B+G+2+Terrace',
                'client'        => 'Ato Yonatan Kebede',
                'budget'        => '9860000',
                'category'      => 'small',
                'status'        => 'Under Construction',
                'description'   => 'Villa Yonathan is a private residence of a family home in Addis Ababa consisting of 4
                                    bedrooms, entertainment areas, and service rooms. The social and entertainment rooms
                                    are design with carefully and much detail to make them have a better connection to the
                                    outside environment to make them more enjoyable. With its modernist approach, villa
                                    Yonathan is one the most well designed projects.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
            [
                'id'            => 24,
                'title'         => 'HORRA COFFEE EXPERIENCE',
                'code_name'     => 'THE APEX3',
                'city'          => 'Addis Ababa',
                'country'       => 'Ethiopia',
                'types'         => '["Architectural", "Interior Design"]',
                'collaborators' => 'Kit interiors PLC',
                'location'      => 'Addis Ababa, Ethiopia',
                'year'          => '2022',
                'site_area'     => '10952',
                'floor_area'    => '811',
                'story_num'     => 'G+0 (1)',
                'client'        => 'Ethio-Gabana',
                'budget'        => '23519000.00',
                'category'      => 'small',
                'status'        => 'Under Construction',
                'description'   => 'Ethio-Gabana ought to situate a coffee experience house at bole, which will a home
                                    to both modern as well as traditional coffee experiences for users and occupants.
                                    The interior space will have different spot to experience the taste of coffee. A minimal
                                    gallery will be situated at the entrance explaining about company history. Company
                                    products will be displayed on the walls as a decorative element. The overall formal
                                    approach of the coffee shop is a paramedic approach of the site. Following the parallel
                                    alignment of the access points, and reflecting it on the roof by angular manner.',
                'architects'    => '{}',
                'currency'      => 'ETB',
                'isActive'      => 1,
                'featured'      => 0,
                'postedBy'      => 0,
            ],
        ];

        Project::insert($projects);
    }
}
