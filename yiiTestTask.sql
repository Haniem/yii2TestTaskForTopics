PGDMP  :    $                 |            yiiTestTask    16.3    16.3     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    24618    yiiTestTask    DATABASE     �   CREATE DATABASE "yiiTestTask" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Russian_Russia.1251';
    DROP DATABASE "yiiTestTask";
                postgres    false            �            1259    24625    subtopic    TABLE     {   CREATE TABLE public.subtopic (
    id integer NOT NULL,
    name character(200) NOT NULL,
    topic_id integer NOT NULL
);
    DROP TABLE public.subtopic;
       public         heap    postgres    false            �            1259    24669    test    TABLE     O   CREATE TABLE public.test (
    name character(200),
    id integer NOT NULL
);
    DROP TABLE public.test;
       public         heap    postgres    false            �            1259    24622    topic    TABLE     Y   CREATE TABLE public.topic (
    id integer NOT NULL,
    name character(200) NOT NULL
);
    DROP TABLE public.topic;
       public         heap    postgres    false            �            1259    24628    topiccontext    TABLE     x   CREATE TABLE public.topiccontext (
    id integer NOT NULL,
    text text NOT NULL,
    subtopic_id integer NOT NULL
);
     DROP TABLE public.topiccontext;
       public         heap    postgres    false            �          0    24625    subtopic 
   TABLE DATA           6   COPY public.subtopic (id, name, topic_id) FROM stdin;
    public          postgres    false    216   �       �          0    24669    test 
   TABLE DATA           (   COPY public.test (name, id) FROM stdin;
    public          postgres    false    218   \       �          0    24622    topic 
   TABLE DATA           )   COPY public.topic (id, name) FROM stdin;
    public          postgres    false    215   y       �          0    24628    topiccontext 
   TABLE DATA           =   COPY public.topiccontext (id, text, subtopic_id) FROM stdin;
    public          postgres    false    217   �       ,           2606    24673    test id 
   CONSTRAINT     X   ALTER TABLE ONLY public.test
    ADD CONSTRAINT id PRIMARY KEY (id) INCLUDE (name, id);
 1   ALTER TABLE ONLY public.test DROP CONSTRAINT id;
       public            postgres    false    218    218            (           2606    24640    subtopic subtopic_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.subtopic
    ADD CONSTRAINT subtopic_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.subtopic DROP CONSTRAINT subtopic_pkey;
       public            postgres    false    216            &           2606    24638    topic topic_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.topic
    ADD CONSTRAINT topic_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.topic DROP CONSTRAINT topic_pkey;
       public            postgres    false    215            *           2606    24642    topiccontext topiccontext_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.topiccontext
    ADD CONSTRAINT topiccontext_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.topiccontext DROP CONSTRAINT topiccontext_pkey;
       public            postgres    false    217            .           2606    24643    topiccontext subtopic_id    FK CONSTRAINT     �   ALTER TABLE ONLY public.topiccontext
    ADD CONSTRAINT subtopic_id FOREIGN KEY (subtopic_id) REFERENCES public.subtopic(id) NOT VALID;
 B   ALTER TABLE ONLY public.topiccontext DROP CONSTRAINT subtopic_id;
       public          postgres    false    4648    216    217            -           2606    24648    subtopic topic_id    FK CONSTRAINT     {   ALTER TABLE ONLY public.subtopic
    ADD CONSTRAINT topic_id FOREIGN KEY (topic_id) REFERENCES public.topic(id) NOT VALID;
 ;   ALTER TABLE ONLY public.subtopic DROP CONSTRAINT topic_id;
       public          postgres    false    215    4646    216            �   [   x�3�0�¾[.6]�zaυ
�z�
Cppb��h��E ���OFC=���1�4��ɐ�3���(@?����x��=#�=... ���      �      x������ � �      �   2   x�3༰���{.lP0T�����v����v�+F��� %�]4      �   m   x����	�0��n)@$�`7�^=X�؂��?-�vd�s���z,ذmި�6���U,'��bĉS�8A0pa���r!�6��Ȳ�v$:�>�#�H�O�3����0     