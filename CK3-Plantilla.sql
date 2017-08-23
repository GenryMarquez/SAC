--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.17
-- Dumped by pg_dump version 9.3.17
-- Started on 2017-08-14 15:37:35 BOT

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 1 (class 3079 OID 11829)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2120 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 171 (class 1259 OID 378560)
-- Name: acl_phinxlog; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE acl_phinxlog (
    version bigint NOT NULL,
    start_time timestamp without time zone NOT NULL,
    end_time timestamp without time zone NOT NULL
);


ALTER TABLE public.acl_phinxlog OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 378563)
-- Name: acos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE acos (
    id integer NOT NULL,
    parent_id integer,
    model character varying(255),
    foreign_key integer,
    alias character varying(255),
    lft integer,
    rght integer
);


ALTER TABLE public.acos OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 378569)
-- Name: acos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE acos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.acos_id_seq OWNER TO postgres;

--
-- TOC entry 2121 (class 0 OID 0)
-- Dependencies: 173
-- Name: acos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE acos_id_seq OWNED BY acos.id;


--
-- TOC entry 174 (class 1259 OID 378582)
-- Name: applications; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE applications (
    id integer NOT NULL,
    code character varying NOT NULL,
    name character varying NOT NULL,
    version character varying NOT NULL
);


ALTER TABLE public.applications OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 378588)
-- Name: applications_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE applications_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.applications_id_seq OWNER TO postgres;

--
-- TOC entry 2122 (class 0 OID 0)
-- Dependencies: 175
-- Name: applications_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE applications_id_seq OWNED BY applications.id;


--
-- TOC entry 176 (class 1259 OID 378590)
-- Name: aros; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE aros (
    id integer NOT NULL,
    parent_id integer,
    model character varying(255),
    foreign_key integer,
    alias character varying(255),
    lft integer,
    rght integer
);


ALTER TABLE public.aros OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 378596)
-- Name: aros_acos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE aros_acos (
    id integer NOT NULL,
    aro_id integer NOT NULL,
    aco_id integer NOT NULL,
    _create character varying(2) DEFAULT '0'::character varying NOT NULL,
    _read character varying(2) DEFAULT '0'::character varying NOT NULL,
    _update character varying(2) DEFAULT '0'::character varying NOT NULL,
    _delete character varying(2) DEFAULT '0'::character varying NOT NULL
);


ALTER TABLE public.aros_acos OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 378603)
-- Name: aros_acos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE aros_acos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aros_acos_id_seq OWNER TO postgres;

--
-- TOC entry 2123 (class 0 OID 0)
-- Dependencies: 178
-- Name: aros_acos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE aros_acos_id_seq OWNED BY aros_acos.id;


--
-- TOC entry 179 (class 1259 OID 378605)
-- Name: aros_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE aros_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.aros_id_seq OWNER TO postgres;

--
-- TOC entry 2124 (class 0 OID 0)
-- Dependencies: 179
-- Name: aros_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE aros_id_seq OWNED BY aros.id;


--
-- TOC entry 180 (class 1259 OID 378632)
-- Name: companys; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE companys (
    id integer NOT NULL,
    name_fiscal character varying(60) NOT NULL,
    tradename character varying(100),
    address character varying(60) NOT NULL,
    taxid1 character varying(25) NOT NULL,
    taxid2 character varying(25) NOT NULL,
    phone character varying(20) NOT NULL,
    country character varying(20),
    region character varying(20),
    city character varying(20),
    email character varying(60) NOT NULL,
    hash character varying,
    apism_id integer NOT NULL,
    created timestamp without time zone DEFAULT '1753-01-01 00:00:00'::timestamp without time zone NOT NULL,
    modified timestamp without time zone DEFAULT '1753-01-01 00:00:00'::timestamp without time zone NOT NULL,
    status boolean DEFAULT true NOT NULL
);


ALTER TABLE public.companys OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 378641)
-- Name: companys_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE companys_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.companys_id_seq OWNER TO postgres;

--
-- TOC entry 2125 (class 0 OID 0)
-- Dependencies: 181
-- Name: companys_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE companys_id_seq OWNED BY companys.id;


--
-- TOC entry 182 (class 1259 OID 378643)
-- Name: groups; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE groups (
    id integer NOT NULL,
    name_grupos character varying(100) NOT NULL,
    titulo_grupos character varying(100) NOT NULL,
    created timestamp without time zone DEFAULT '1753-01-01 00:00:00'::timestamp without time zone NOT NULL,
    modified timestamp without time zone DEFAULT '1753-01-01 00:00:00'::timestamp without time zone NOT NULL,
    status boolean DEFAULT true NOT NULL
);


ALTER TABLE public.groups OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 378649)
-- Name: groups_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE groups_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.groups_id_seq OWNER TO postgres;

--
-- TOC entry 2126 (class 0 OID 0)
-- Dependencies: 183
-- Name: groups_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE groups_id_seq OWNED BY groups.id;


--
-- TOC entry 184 (class 1259 OID 378721)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    email_usuario character varying(60) NOT NULL,
    username character varying(255) NOT NULL,
    password character varying(250) NOT NULL,
    group_id integer NOT NULL,
    created timestamp without time zone DEFAULT '1753-01-01 00:00:00'::timestamp without time zone NOT NULL,
    modified timestamp without time zone DEFAULT '1753-01-01 00:00:00'::timestamp without time zone NOT NULL,
    status boolean DEFAULT true NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 378730)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 2127 (class 0 OID 0)
-- Dependencies: 185
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- TOC entry 1946 (class 2604 OID 378737)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY acos ALTER COLUMN id SET DEFAULT nextval('acos_id_seq'::regclass);


--
-- TOC entry 1947 (class 2604 OID 378739)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY applications ALTER COLUMN id SET DEFAULT nextval('applications_id_seq'::regclass);


--
-- TOC entry 1948 (class 2604 OID 378740)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY aros ALTER COLUMN id SET DEFAULT nextval('aros_id_seq'::regclass);


--
-- TOC entry 1953 (class 2604 OID 378741)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY aros_acos ALTER COLUMN id SET DEFAULT nextval('aros_acos_id_seq'::regclass);


--
-- TOC entry 1957 (class 2604 OID 378745)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY companys ALTER COLUMN id SET DEFAULT nextval('companys_id_seq'::regclass);


--
-- TOC entry 1961 (class 2604 OID 378746)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY groups ALTER COLUMN id SET DEFAULT nextval('groups_id_seq'::regclass);


--
-- TOC entry 1965 (class 2604 OID 378754)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- TOC entry 2098 (class 0 OID 378560)
-- Dependencies: 171
-- Data for Name: acl_phinxlog; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY acl_phinxlog (version, start_time, end_time) FROM stdin;
20141229162641	2016-05-01 15:07:41	2016-05-01 15:07:41
\.


--
-- TOC entry 2099 (class 0 OID 378563)
-- Dependencies: 172
-- Data for Name: acos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY acos (id, parent_id, model, foreign_key, alias, lft, rght) FROM stdin;
3	2	\N	\N	index	3	4
4	2	\N	\N	view	5	6
5	2	\N	\N	add	7	8
6	2	\N	\N	edit	9	10
2	1	\N	\N	Groups	2	13
7	2	\N	\N	delete	11	12
8	1	\N	\N	Pages	14	17
11	10	\N	\N	login	19	20
12	10	\N	\N	logout	21	22
13	10	\N	\N	index	23	24
14	10	\N	\N	view	25	26
15	10	\N	\N	add	27	28
16	10	\N	\N	edit	29	30
10	1	\N	\N	Users	18	33
17	10	\N	\N	delete	31	32
18	1	\N	\N	Acl	34	35
19	1	\N	\N	Bake	36	37
22	21	\N	\N	index	40	41
21	20	\N	\N	Panels	39	44
23	21	\N	\N	view	42	43
24	20	\N	\N	Requests	45	48
25	24	\N	\N	view	46	47
20	1	\N	\N	DebugKit	38	53
26	20	\N	\N	Toolbar	49	52
27	26	\N	\N	clearCache	50	51
1	\N	\N	\N	controllers	1	56
28	1	\N	\N	Migrations	54	55
9	8	\N	\N	display	15	16
\.


--
-- TOC entry 2128 (class 0 OID 0)
-- Dependencies: 173
-- Name: acos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('acos_id_seq', 28, true);


--
-- TOC entry 2101 (class 0 OID 378582)
-- Dependencies: 174
-- Data for Name: applications; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY applications (id, code, name, version) FROM stdin;
1	Open4	Open4Lab	V 1.0
\.


--
-- TOC entry 2129 (class 0 OID 0)
-- Dependencies: 175
-- Name: applications_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('applications_id_seq', 1, true);


--
-- TOC entry 2103 (class 0 OID 378590)
-- Dependencies: 176
-- Data for Name: aros; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY aros (id, parent_id, model, foreign_key, alias, lft, rght) FROM stdin;
2	1	Users	1	\N	2	3
3	1	Users	2	\N	4	5
1	\N	Groups	1	\N	1	6
\.


--
-- TOC entry 2104 (class 0 OID 378596)
-- Dependencies: 177
-- Data for Name: aros_acos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY aros_acos (id, aro_id, aco_id, _create, _read, _update, _delete) FROM stdin;
8	1	22	1	1	1	1
5	1	7	1	1	1	1
2	1	4	1	1	1	1
6	1	13	1	1	1	1
9	3	13	1	1	1	1
3	1	5	1	1	1	1
4	1	6	1	1	1	1
7	1	25	1	1	1	1
1	1	3	1	1	1	1
11	2	7	1	1	1	1
12	2	6	1	1	1	1
13	2	5	1	1	1	1
14	2	4	1	1	1	1
10	2	3	1	1	1	1
15	2	21	1	1	1	1
16	2	24	1	1	1	1
17	2	26	1	1	1	1
\.


--
-- TOC entry 2130 (class 0 OID 0)
-- Dependencies: 178
-- Name: aros_acos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('aros_acos_id_seq', 17, true);


--
-- TOC entry 2131 (class 0 OID 0)
-- Dependencies: 179
-- Name: aros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('aros_id_seq', 3, true);


--
-- TOC entry 2107 (class 0 OID 378632)
-- Dependencies: 180
-- Data for Name: companys; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY companys (id, name_fiscal, tradename, address, taxid1, taxid2, phone, country, region, city, email, hash, apism_id, created, modified, status) FROM stdin;
1	DEMO C.A	DEMO COMERCIAL	CALLE N°50	J-12345678-9	123456789	123456789	VENEZUELA	TACHIRA	SAN CRSTOBAL	demo@demo.com	$AAAA$	1	2016-10-05 15:44:51	2016-10-09 17:04:06	t
\.


--
-- TOC entry 2132 (class 0 OID 0)
-- Dependencies: 181
-- Name: companys_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('companys_id_seq', 1, true);


--
-- TOC entry 2109 (class 0 OID 378643)
-- Dependencies: 182
-- Data for Name: groups; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY groups (id, name_grupos, titulo_grupos, created, modified, status) FROM stdin;
1	Admin	Administradores	2016-05-01 15:10:41	2016-10-04 01:52:15	t
\.


--
-- TOC entry 2133 (class 0 OID 0)
-- Dependencies: 183
-- Name: groups_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('groups_id_seq', 1, true);


--
-- TOC entry 2111 (class 0 OID 378721)
-- Dependencies: 184
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (id, email_usuario, username, password, group_id, created, modified, status) FROM stdin;
1	admin@opensoftware.net	admin	$2y$10$VoI2TJXYzDjEYebsnIC3MuA6aWfpvDUi0.Iht04VnsDYLDAcTofjG	1	2016-05-01 15:12:14	2016-05-01 15:12:14	t
2	demo@opensoftware.net	demo	$2y$10$GrbGvcaA1oEE6/Bnrzaz/.xQYxK1Us8cA/3VOmh9E9u30WXsmPf9y	1	2016-06-04 00:52:53	2016-10-03 01:31:32	t
\.


--
-- TOC entry 2134 (class 0 OID 0)
-- Dependencies: 185
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('users_id_seq', 2, true);


--
-- TOC entry 1967 (class 2606 OID 378756)
-- Name: acl_phinxlog_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY acl_phinxlog
    ADD CONSTRAINT acl_phinxlog_pkey PRIMARY KEY (version);


--
-- TOC entry 1971 (class 2606 OID 378758)
-- Name: acos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY acos
    ADD CONSTRAINT acos_pkey PRIMARY KEY (id);


--
-- TOC entry 1973 (class 2606 OID 378762)
-- Name: applications_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY applications
    ADD CONSTRAINT applications_pkey PRIMARY KEY (id);


--
-- TOC entry 1981 (class 2606 OID 378764)
-- Name: aros_acos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY aros_acos
    ADD CONSTRAINT aros_acos_pkey PRIMARY KEY (id);


--
-- TOC entry 1977 (class 2606 OID 378766)
-- Name: aros_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY aros
    ADD CONSTRAINT aros_pkey PRIMARY KEY (id);


--
-- TOC entry 1983 (class 2606 OID 378774)
-- Name: companys_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY companys
    ADD CONSTRAINT companys_pkey PRIMARY KEY (id);


--
-- TOC entry 1986 (class 2606 OID 378776)
-- Name: groups_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY groups
    ADD CONSTRAINT groups_pkey PRIMARY KEY (id);


--
-- TOC entry 1989 (class 2606 OID 378792)
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 1968 (class 1259 OID 378793)
-- Name: acos_alias; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX acos_alias ON acos USING btree (alias);


--
-- TOC entry 1969 (class 1259 OID 378794)
-- Name: acos_lft_rght; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX acos_lft_rght ON acos USING btree (lft, rght);


--
-- TOC entry 1978 (class 1259 OID 378795)
-- Name: aros_acos_aco_id; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX aros_acos_aco_id ON aros_acos USING btree (aco_id);


--
-- TOC entry 1979 (class 1259 OID 378796)
-- Name: aros_acos_aro_id_aco_id; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX aros_acos_aro_id_aco_id ON aros_acos USING btree (aro_id, aco_id);


--
-- TOC entry 1974 (class 1259 OID 378797)
-- Name: aros_alias; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX aros_alias ON aros USING btree (alias);


--
-- TOC entry 1975 (class 1259 OID 378798)
-- Name: aros_lft_rght; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX aros_lft_rght ON aros USING btree (lft, rght);


--
-- TOC entry 1984 (class 1259 OID 378799)
-- Name: fki_apisms_fkey; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_apisms_fkey ON companys USING btree (apism_id);


--
-- TOC entry 1987 (class 1259 OID 378800)
-- Name: fki_fki_group_id; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX fki_fki_group_id ON users USING btree (group_id);


--
-- TOC entry 1990 (class 2606 OID 378806)
-- Name: fki_group_id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY users
    ADD CONSTRAINT fki_group_id FOREIGN KEY (group_id) REFERENCES groups(id);


--
-- TOC entry 2119 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-08-14 15:37:35 BOT

--
-- PostgreSQL database dump complete
--

