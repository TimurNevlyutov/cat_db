--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2
-- Dumped by pg_dump version 12.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: cat_coord_dh; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cat_coord_dh (
    object character varying(24) NOT NULL,
    dh_id character varying(24) NOT NULL,
    instance smallint NOT NULL,
    north numeric(32,0) NOT NULL,
    east numeric(32,0) NOT NULL,
    rl numeric(32,0) NOT NULL,
    date_survey date NOT NULL,
    date_inserted date NOT NULL,
    inserted_by character varying(100) NOT NULL
);


ALTER TABLE public.cat_coord_dh OWNER TO postgres;

--
-- Name: cat_dh; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cat_dh (
    object character varying(24) NOT NULL,
    dh_id character varying(24) NOT NULL,
    type_dh character varying(100) NOT NULL,
    line_name character varying(24) NOT NULL,
    hole_number character varying(24) NOT NULL,
    project_depth numeric(24,0) NOT NULL,
    final_depth numeric(24,0) NOT NULL,
    date_started date NOT NULL,
    date_completed date NOT NULL,
    reason_completed character varying(100) NOT NULL,
    author character varying(100) NOT NULL,
    dh_status smallint NOT NULL,
    date_inserted date NOT NULL,
    inserted_by character varying(100) NOT NULL
);


ALTER TABLE public.cat_dh OWNER TO postgres;

--
-- Name: cat_object; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cat_object (
    id_object integer NOT NULL,
    object character varying(24) NOT NULL,
    description character varying(256),
    date_inserted date,
    inserted_by character varying(100)
);


ALTER TABLE public.cat_object OWNER TO postgres;

--
-- Name: cat_object_id_object_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cat_object_id_object_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cat_object_id_object_seq OWNER TO postgres;

--
-- Name: cat_object_id_object_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cat_object_id_object_seq OWNED BY public.cat_object.id_object;


--
-- Name: cat_reg; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cat_reg (
    id integer NOT NULL,
    login character varying(200) NOT NULL,
    pass character varying(32) NOT NULL,
    salt character varying(32) NOT NULL,
    active_hex character varying(32) NOT NULL,
    status smallint NOT NULL
);


ALTER TABLE public.cat_reg OWNER TO postgres;

--
-- Name: cat_reg_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cat_reg_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cat_reg_id_seq OWNER TO postgres;

--
-- Name: cat_reg_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cat_reg_id_seq OWNED BY public.cat_reg.id;


--
-- Name: persons; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.persons (
    id integer NOT NULL,
    lastname character varying(255) NOT NULL,
    firstname character varying(255),
    age integer
);


ALTER TABLE public.persons OWNER TO postgres;

--
-- Name: cat_object id_object; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_object ALTER COLUMN id_object SET DEFAULT nextval('public.cat_object_id_object_seq'::regclass);


--
-- Name: cat_reg id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_reg ALTER COLUMN id SET DEFAULT nextval('public.cat_reg_id_seq'::regclass);


--
-- Data for Name: cat_coord_dh; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: cat_dh; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: cat_object; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.cat_object VALUES (1, '2', NULL, NULL, NULL);
INSERT INTO public.cat_object VALUES (2, '1', NULL, NULL, NULL);


--
-- Data for Name: cat_reg; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.cat_reg VALUES (1, 'timur', 'e2f5', '', '', 1);
INSERT INTO public.cat_reg VALUES (2, 'user1', '111', '', '', 1);


--
-- Data for Name: persons; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Name: cat_object_id_object_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cat_object_id_object_seq', 1, false);


--
-- Name: cat_reg_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cat_reg_id_seq', 2, true);


--
-- Name: cat_coord_dh cat_coord_dh_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_coord_dh
    ADD CONSTRAINT cat_coord_dh_pkey PRIMARY KEY (object, dh_id, instance);


--
-- Name: cat_dh cat_dh_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_dh
    ADD CONSTRAINT cat_dh_pkey PRIMARY KEY (object, dh_id);


--
-- Name: cat_object cat_object_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_object
    ADD CONSTRAINT cat_object_pkey PRIMARY KEY (object);


--
-- Name: cat_reg cat_reg_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cat_reg
    ADD CONSTRAINT cat_reg_pkey PRIMARY KEY (id);


--
-- Name: persons persons_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.persons
    ADD CONSTRAINT persons_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

